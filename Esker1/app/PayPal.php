<?php

namespace App;

/**
 *
 */
class PayPal
{

  private $_apiContext; // esta veriable define todas las configuraciones y los permisos q necesita paypal
  private $shopping_cart;
  private $_ClientId = "AVy4VWPW4mkCwIHEitsRTfQZmNRMNeAgnxrxNBaIxlQnF79nwG1gvMcP-2eYcIuBS2h7eOlMEa11WQsX";
  private $_ClientSecret = "EHubyFw2xkhRtKwA_zbuVzgiwtfL80ZFeW_fALXwZOEOGB6_pQnw7_UJuFIWByPfiEmS4ZAfQ3pfU_jw";

  public function __construct($shopping_cart)
  {
    $this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId, $this->_ClientSecret); //usando el facade creado antes uso la funcion ApiContext pasando los datos del client del sandbox

    $config = config("paypal_payment"); // paso la configuracion q modifique en config/paypal_payment.php pero se pasa sin el php

    $flatConfig = array_dot($config); // convertimos la configuracion recibida en un array porq asi lo espera la api

    $this->_apiContext->setConfig($flatConfig); // al _apiContext le agregamos el array de configuracion creado

    $this->shopping_cart = $shopping_cart;
  }

  public function generate() //inicia los pasos para generar el pago con toda la info q necesita paypal : quien va a pagar , las transacciones q se va a hacer , las url a las q se dirigira, los item a cobrar
  {
    $payment = \PaypalPayment::payment()->setIntent("sale")//pasamos la intencion que en nuestro caso es sale=vender
                                        ->setPayer($this->payer())//le pasamos los datos del pagador mediante la funcion payer de esta clase
                                        ->setTransactions([$this->transaction()])//le pasamos un array con las transacciones, mediante la funcion transaction de esta clase
                                        ->setRedirectUrls($this->redirectURLs())// le decimos a que url pasar despues de generar el pago o en caso de no poder pagar
                                        ;

    try {
      $payment->create($this->_apiContext); // este es el metodo q crea el pago, el cual configuramos antes y le pasamos la variable con los ultimos datos necesarios
    } catch (\Exception $e) {
      dd($e);
      exit(1);
    }

    return $payment; // si todo salio bien retorno el pago creado
  }
  public function payer()
  {
    // retorna la info del pagador
    return \PaypalPayment::payer()->setPaymentMethod("paypal"); // aca le decimos q pagamos con paypal si pagaramos con tarjeta lo aclaramos aca
  }
  public function transaction()
  {
    // retorna la info de la transacciones
    return \PaypalPayment::transaction()->setAmount($this->amount())
                                        ->setItemList($this->items()) // aca pasamos la lista con los items a cobrar medieante la funcion items
                                        ->setDescription("Tu compra en Esker Outdoors")
                                        ->setInvoiceNumber(uniqid()); // le asigno un string unico con la funcion uniqid, el invoice es el num de cobro
  }

  public function items()
  {
    $items = []; //inicializo un arreglo vacio
    $products = $this->shopping_cart->products()->get(); // le pido los productos dentro del carro de compras
     foreach ($products as $product) { // itero sobre los productos recibidos, la logica la voy a manejar desde el modelo del producto
        array_push($items, $product->paypalItem());
     }
     return \PaypalPayment::itemList()->setItems($items); // retorno el arreglo de items dentro del item list


  }
  public function amount()
  {
    return \PaypalPayment::amount()->setCurrency('USD')//le decimos en q moneda cobrar , tener en cuenta q solo acepta usd y euros, si queremos cobrar en nuesta moneda tenemos q pasarlo a usd
                                  ->setTotal($this->shopping_cart->total());//sacamos el total usando la funcion de la clase carrito de compras, el carro q usamos es el q recibimos en el __construct
  }

  public function redirectURLs()
  {
    $baseURL = url('/'); // esta es la url base del sitio la obtenemos con la func url , en nuetro caso es /
    return \PaypalPayment::redirectUrls()->setReturnUrl("$baseURL/payments/store") // aca le digo a donde ir desp del pago
                                        ->setCancelUrl("$baseURL/carrito"); // aca le digo donde ir si no logra pagar
  }

  public function execute($paymentId, $payerId) // con esta funcion movemos el dinero del saldo de la persona al saldo del vendedor
  {
    $payment = \PaypalPayment::getById($paymentId, $this->_apiContext); //busco el pago con ese id y la paso los datos de mi cuenta con el ApiContext

    $execution= \PaypalPayment::PaymentExecution()->setPayerId($payerId); //a la ejecucion del págo le paso el id del pagador

    return $payment->execute($execution, $this->_apiContext); //ester es me todo de la api 
  }
}


 ?>
