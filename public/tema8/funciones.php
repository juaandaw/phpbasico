<?php

function mostrarErorres($datos){
    echo '<ul>';
    foreach ($datos as $error){
        echo '<li>'. $error . '</li><br>';
    }
}

function mostrarCampo($campo){
    if(isset($_POST[$campo])){
        echo 'value="'. $_POST[$campo] . '"';
    }
}

function mostrar_error_campo($campo,$errores){
    if(isset($errores[$campo])) {
        echo '<span>' . $errores[$campo] . '</span>';
    }
}