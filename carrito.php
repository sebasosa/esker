<?php
session_start();

require_once 'controladores/funciones.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Carrito de Compras</title>
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Teko:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf37ca3396.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- INICIO HEADER -->
    <?php require_once 'partials/header.php' ?>


    <!-- CARRITO -->
    <div id="carrito" class="pagina">
      <div class="container">
        <h1>Carrito de Compras</h1>
      </div>
    </div>

    <div class="carrito">
      <div class="pedido">
        <form action="https://valkymia.com/checkout/cart/updatePost/" method="post">
        <input name="form_key" type="hidden" value="Ial8mqekfi6rxOYp">
        <table id="shopping-cart-table" class="cart-table data-table">
            <colgroup><col width="1">
            <col width="1">
            <col width="1">
            <col width="1">
            <col width="1">
            <col width="1">

                    </colgroup><thead>
                <tr class="first last">
                    <th class="nombre" rowspan="1"><span class="nobr">Producto</span></th>

                    <th class="info-first info" rowspan="1">&nbsp;</th>

                    <th class="a-center cart-price-head info" colspan="1">
<!--                            <div class="cart-price-placeholder">-->
                            <span class="nobr">Precio</span>
<!--                            </div>-->
                    </th>

                    <th rowspan="1" class="a-center info">
                        Cantidad

                    </th>

                    <th class="a-center cart-total-head info" colspan="1">
<!--                            <div class="cart-total-placeholder">-->
                            Sub-total<!--                            </div>-->
                    </th>

                    <th class="a-center eliminar info" rowspan="1">Eliminar</th>

                </tr>
                            </thead>

            <tbody>
                            <tr class="first odd">
    <td class="product-cart-image">
                    <a href="https://valkymia.com/camisa-boris.html" title="CAMISA BORIS" class="product-image">
                    <img src="https://valkymia.com/media/catalog/product/cache/1/thumbnail/150x192/9df78eab33525d08d6e5fb8d27136e95/b/o/bori-offwhite1.jpg" alt="CAMISA BORIS">
                    </a>

        <ul class="cart-links">
                            <li>
                    <a href="https://valkymia.com/checkout/cart/configure/id/775916/" title="Edit item parameters">Modificar</a>
                </li>

                            <li>
                    <a href="https://valkymia.com/wishlist/index/fromcart/item/775916/" class="link-wishlist use-ajax">Move to wishlist</a>
                </li>
                    </ul>
    </td>

    <td class="product-cart-info">

        <a href="https://valkymia.com/checkout/cart/delete/id/775916/form_key/Ial8mqekfi6rxOYp/uenc/aHR0cHM6Ly92YWxreW1pYS5jb20vY2hlY2tvdXQvY2FydC8,/" title="Quitar Artículos" class="btn-remove btn-remove2">Quitar Artículos</a>

        <h2 class="product-name">
                    <a href="https://valkymia.com/camisa-boris.html">CAMISA BORIS</a>
                </h2>

        <div class="product-cart-sku">
            <span class="label">No. Ref. (SKU):</span> 1112006713M        </div>

                <dl class="item-options">
                                        <dt>Color</dt>
                <dd>offwhite                            </dd>
                                        <dt>Talle</dt>
                <dd>M                            </dd>
                    </dl>



    </td>


                <td class="product-cart-price" data-rwd-label="Precio" data-rwd-tax-label="Excl. Impuestos">

                            <span class="cart-price">
                                                <span class="price">$1.850</span>
            </span>

                    </td>
        <!-- inclusive price starts here -->
                <td class="product-cart-actions qty" data-rwd-label="Cantidad">
        <span class="restar">-</span>
        <input type="text" pattern="\d*(\.\d+)?" name="cart[775916][qty]" value="1" size="4" data-cart-item-id="1112006713M" title="Cantidad" class="input-text qty" maxlength="12">
        <span class="sumar">+</span>

        <button type="submit" name="update_cart_action" data-cart-item-update="" value="update_qty" title="Actualizar" class="button btn-update"><span><span>Actualizar</span></span>
        </button>
    </td>

    <!--Sub total starts here -->
        <td class="product-cart-total" data-rwd-label="Sub-total">
                    <span class="cart-price">

                                                <span class="price">$1.850</span>
        </span>
            </td>
            <td class="a-center product-cart-remove last">
        <a href="https://valkymia.com/checkout/cart/delete/id/775916/form_key/Ial8mqekfi6rxOYp/uenc/aHR0cHM6Ly92YWxreW1pYS5jb20vY2hlY2tvdXQvY2FydC8,/" title="Quitar Artículos" class="btn-remove btn-remove2">Quitar Artículos</a>
    </td>
</tr>


                            <tr class="last even">
    <td class="product-cart-image">
                    <a href="https://valkymia.com/traje-de-bano-brigadier.html" title="TRAJE DE BAÑO BRIGADIER" class="product-image">
                    <img src="https://valkymia.com/media/catalog/product/cache/1/thumbnail/150x192/9df78eab33525d08d6e5fb8d27136e95/b/r/brigadier-gris1.jpg" alt="TRAJE DE BAÑO BRIGADIER">
                    </a>

        <ul class="cart-links">
                            <li>
                    <a href="https://valkymia.com/checkout/cart/configure/id/775918/" title="Edit item parameters">Modificar</a>
                </li>

                            <li>
                    <a href="https://valkymia.com/wishlist/index/fromcart/item/775918/" class="link-wishlist use-ajax">Move to wishlist</a>
                </li>
                    </ul>
    </td>

    <td class="product-cart-info">

        <a href="https://valkymia.com/checkout/cart/delete/id/775918/form_key/Ial8mqekfi6rxOYp/uenc/aHR0cHM6Ly92YWxreW1pYS5jb20vY2hlY2tvdXQvY2FydC8,/" title="Quitar Artículos" class="btn-remove btn-remove2">Quitar Artículos</a>

        <h2 class="product-name">
                    <a href="https://valkymia.com/traje-de-bano-brigadier.html">TRAJE DE BAÑO BRIGADIER</a>
                </h2>

        <div class="product-cart-sku">
            <span class="label">No. Ref. (SKU):</span> 2103003990XL        </div>

                <dl class="item-options">
                                        <dt>Color</dt>
                <dd>gris oscuro                            </dd>
                                        <dt>Talle</dt>
                <dd>XL                            </dd>
                    </dl>



    </td>


                <td class="product-cart-price" data-rwd-label="Precio" data-rwd-tax-label="Excl. Impuestos">

                            <span class="cart-price">
                                                <span class="price">$1.290</span>
            </span>

                    </td>
        <!-- inclusive price starts here -->
                <td class="product-cart-actions qty" data-rwd-label="Cantidad">
        <span class="restar">-</span>
        <input type="text" pattern="\d*(\.\d+)?" name="cart[775918][qty]" value="1" size="4" data-cart-item-id="2103003990XL" title="Cantidad" class="input-text qty" maxlength="12">
        <span class="sumar">+</span>

        <button type="submit" name="update_cart_action" data-cart-item-update="" value="update_qty" title="Actualizar" class="button btn-update"><span><span>Actualizar</span></span>
        </button>
    </td>

    <!--Sub total starts here -->
        <td class="product-cart-total" data-rwd-label="Sub-total">
                    <span class="cart-price">

                                                <span class="price">$1.290</span>
        </span>
            </td>
            <td class="a-center product-cart-remove last">
        <a href="https://valkymia.com/checkout/cart/delete/id/775918/form_key/Ial8mqekfi6rxOYp/uenc/aHR0cHM6Ly92YWxreW1pYS5jb20vY2hlY2tvdXQvY2FydC8,/" title="Quitar Artículos" class="btn-remove btn-remove2">Quitar Artículos</a>
    </td>
</tr>


                        </tbody>
        </table>
        <script type="text/javascript">decorateTable('shopping-cart-table')</script>
    </form>
      </div>
    </div>

    <!-- FOOTER -->
    <?php require_once 'partials/footer.php' ?>

    <!--  SCRIPTS  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
