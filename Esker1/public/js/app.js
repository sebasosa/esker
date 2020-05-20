$.fn.editable.defaults.mode = 'inline'; // defino el tipo de popup
$.fn.editable.defaults.ajaxOptions = {type: "PUT"}; //defino el metodo de envio en vez de post le paso put

$(document).ready(function(){
  $(".set-guide-number").editable(); //inicializa los controles de modificacion para el campo

  $(".select-status").editable({ //al ser un select le pasamos las posibles entradas
    source:[
      {value:"creado", text: "Creado"},
      {value:"enviado", text: "Enviado"},
      {value:"recibido", text: "Recibido"}
      ]
  });

  $('.your-class').slick({ //este codigo es del slide de la pag principal
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
  });
  $("#menu-toggle").click(function() {
    $("#wrapper").toggleClass("toggled");
    let icon = document.getElementById('iconito');
    icon.classList.toggle('fa-angle-double-left');
    icon.classList.toggle('fa-angle-double-right');
  });
  /* --Esta funcion se encarga de cambiar las imagenes en la pag de detalle producto --*/
  let links = document.querySelectorAll("#img-selector");
  links.forEach((item, i) => {
    item.addEventListener("click", function(event){
     event.preventDefault()
     let imagen = item.querySelector('img').getAttribute("src");
      $("#imag-producto").attr("src", imagen);
     });
  });
  /*--Esta funcion es la que se encarga de agregar el producto al carro de compras */
  $(".cart-add").on("submit", function(ev){ //aca evitamos que haga el redireccionamiento al evitar el evento submit
    ev.preventDefault();
    let form =$(this); // asigno a esta variable el formulario que envia la peticion
    let button = form.find("[type='submit']"); // a esta variable le paso el boton que viene en el formulario
    // peticion AJAX

    $.ajax({ //esta es la peticion ajax q reemplaza al submit del formulario
      url: form.attr("action"), // saco la url a la que envia el formulario
      method: form.attr("method"), // y el metodo que en este caso es POST
      data: form.serialize(), //transformo el formulario en datos q maneja ajax
      dataType: "JSON",
      beforeSend: function(){// esta funcion pone el valor del boton en cargando...
        button.val("CARGANDO PRODUCTO");
      },
      success: function(data){ // esta funcion se activa si el pedido fue realizado con exito , cambiamos el color del boton y el valor para mostrar el exito de la operacion
        button.css({
      "background-color": "#2ecc71",
    }).val("PRODUCTO AGREGADO!");
        console.log(data);
        $(".contador").html(data.products_count).addClass("resaltar"); //con esta linea actualizo el contador de productos q esta en el header
        setTimeout(function(){ // con esta funcion le decimos que despues de un tiempo corra la funcion que esta dentro
          restartButton(button)
        },1500);
      },
      error: function(err){ // si ocurre algun error con la peticion ajax esta funcion se activa
        console.log(err)
        button.css("background-color","#2ecc71").val("HUBO UN ERROR");
        setTimeout(function(){
          restartButton(button)
        },2000);
      }
    });
    return false;
  });
  function restartButton(button){ //esta funcion regresa el boton de agregar al carrito a su estado original
    button.val("Agregar al carrito").attr("style", "");
    $(".contador").removeClass("resaltar");
  }

});
