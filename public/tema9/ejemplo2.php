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

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && $_POST['nombre'] != ''){

                if(is_writable($archivo)) {
                    $fuente = fopen($archivo, 'a+');
                    $reserva = $_POST['cita'] . ' :' . $_POST['nombre'] . "\n";
                    fwrite($fuente, $reserva);
                    fclose($fuente);
                    echo "<h2>Cita guardada correctamente</h2>";
                }
            } else {
                echo "<h2>La cita no ha podido ser guardada</h2>";
            }
        } else {

            include "formularioCitas.php";
        }

    ?>
</body>
</html>