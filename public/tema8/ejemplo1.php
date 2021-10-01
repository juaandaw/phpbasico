<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo 1 tema 6</title>
</head>
<body>
<h1>Formularios usables</h1>
<?php
$errores = [];
include 'funciones.php';
if(!$_POST){
    include "formulario.php";
} else {
    if(!isset($_POST['nombre'])){
        $errores['nombre'] = "No he recibido el nombre";
    }
    elseif (strlen($_POST['nombre'])<3){
        $errores['nombre'] ="campo nombre demasiado corto";
    }
    if (!$_POST['email']){
        $errores['email']= "campo email demasiado corto";
    }
    elseif (strlen($_POST['email'])<6){
        $errores['email'] ="campo email no es valido";
    } if (!isset($_POST['clave1']) || !isset($_POST['clave2'])){
        $errores['clave1']= "No he recibido ambas claves";
    }else {
        if (strlen($_POST['clave1'])<5){
            $errores['clave1']="La clave debe tener al menos 6 caracteres";
        }
        if ($_POST['clave1'] != $_POST['clave2']) {
            $errores['clave2']= "Las claves no son iguales";
        }
    }
    if($errores){
        mostrarErorres($errores);
        include 'formulario.php';
    } else {
        echo $_POST['nombre'] . '<br>';
        echo $_POST['email'] . '<br>';
        echo $_POST['clave1'] . '<br>';
        echo $_POST['clave2'] . '<br>';
    }
}
?>