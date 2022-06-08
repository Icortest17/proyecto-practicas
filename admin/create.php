<?php
    // recojo los valores que el usuario me envia
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dir_subida  = "img/productos/";
        // Esto me lo da el formulario al subir el archivo. fileToUpload es el name del input.
        $fichero_subido = $dir_subida . basename($_FILES["fileToUpload"]["name"]); 

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fichero_subido)) {
            // Mensaje de confirmación donde todo ha ido bien
            echo"<script>alert('El archivo se subio correctamente...');</script>";
        } else {
            // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
            echo '<p>¡Ups! Algo ha pasado.</p>';
        }
    }  
    
    
    $nombre = $_REQUEST["nombre"];
    $horaEntrada = $_REQUEST["horaEntrada"];
    

    /*
        1. Conectarme a la base de datos
        2. Construir un INSERT INTO.....
        3. Ejecutar la consulta
        4. Cerrar conexión
    */
    $mysqli = new mysqli("192.168.1.10", "admin", "admin", "prueba");
    $sql = "INSERT INTO usuarios (nombre, horario) VALUES ('$nombre','$horaEntrada');";
    $mysqli->query($sql);
    $mysqli->close();


    // Redirecciona a otro sitio
    header("location: productos.php");
