<?php
    /*
    1. Recoger los valores del usuario
    2. Conectarme a la bbdd
    3. Crear la sentencia UPDATE ..
    4. Ejecutamos
    5. Nos dirija a la pagina de index.php
    */

    $nombre = $_REQUEST["nombre"];
    $horaEntrada = $_REQUEST["horaEntrada"];
    $id = $_REQUEST["id"];

    $mysqli = new mysqli("192.168.1.10", "admin", "admin", "prueba");
    $sql = "UPDATE usuarios SET nombre='$nombre', horario='$horaEntrada' WHERE id = $id";
    $result = $mysqli->query($sql);
    $mysqli->close();



    // Redirecciona a otro sitio
    header("location: productos.php");


?>
