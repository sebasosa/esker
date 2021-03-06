<?php

function pre($algo) {
    echo '<pre>';
    var_dump($algo);
    echo '</pre>';
}

function dd($algo) {
    pre($algo);
    exit;
}

function validarRegistracion($unArray) {

    $errores = [];

    // Validamos campo "nombre"
    if( isset($unArray['nombre']) ) {
        if( empty($unArray['nombre']) ) {
            $errores['nombre'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['nombre']) < 2 ) {
            $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres.";
        }
    }

    // Validamos campo "email"
    if( isset($unArray['email']) ) {
        if( empty($unArray['email']) ) {
            $errores['email'] = "Este campo debe completarse.";
        }
        elseif( !filter_var($unArray['email'], FILTER_VALIDATE_EMAIL) ) {
            $errores['email'] = "Debés ingresar un email válido.";
        }
    }

    if( isset($unArray['password']) ) {
        if( empty($unArray['password']) ) {
            $errores['password'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['password']) < 6 ) {
            $errores['password'] = "Tu contraseña debe tener al menos 6 caracteres.";
        }
    }

    if( isset($unArray['repassword']) ) {
        if( empty($unArray['repassword']) ) {
            $errores['repassword'] = "Este campo debe completarse.";
        }
        elseif($unArray['password'] != $unArray['repassword']) {
            $errores['repassword'] = "Tenés que ingresar la misma contraseña";
        }
    }
    if ($_FILES) {
      if ($_FILES["img"]["error"] != 0) {
        $errores['imagen'] = "Hubo un error al cargar la imagen <br>";
      }
      else{
        $ext = pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);

        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
          $errores['imagen'] = "La imagen debe ser jpg, jpeg o png <br>";
        }
      }

    }

    return $errores;
}

function persistirDato($arrayE, $campo) {
    if( isset($arrayE[$campo]) ) {
        return "";
    } else {
        if(isset($_POST[$campo])) {
            return $_POST[$campo];
        }
    }
}

function armarArrayUsuario() {

}

function abrirBBDD($unArchivo) {
    $usuariosGuardados = file_get_contents($unArchivo);
    $explodeDeUsuarios = explode(PHP_EOL, $usuariosGuardados);
    array_pop($explodeDeUsuarios);
    return $explodeDeUsuarios;
}
function sessionCheck(){
    if (isset ($_SESSION['nombre'])){

        return true;

    }
}

?>
