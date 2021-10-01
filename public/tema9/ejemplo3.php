<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas Medicas</title>
</head>
<body>
<?php

$archivo = "citas.txt";

var_dump(file($archivo)); // devuelve el contenido del archivo almacenandolo en un array
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && $_POST['nombre'] != ''){

        if(is_writable($archivo)) {
            $reserva = $_POST['cita'] . ' :' . $_POST['nombre'] . "\n";
            file_put_contents($archivo,$reserva,FILE_APPEND); //abre archivo,escribe y cierra
            echo "<h2>Cita guardada correctamente</h2>";
        }
    } else {
        echo "<h2>La cita no ha podido ser guardada</h2>";
    }
} else {

    include 'formularioCitas.php';
}

?>
</body>
</html>