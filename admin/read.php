<?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("192.168.1.10", "admin", "admin", "prueba");
    $sql = "SELECT * FROM usuarios";
    $result = $mysqli->query($sql);

    echo "<table class='table table-striped table-bordered'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Hora Entrada</th>";
        echo "<th>Accion</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        if (isset($_REQUEST["id"]) and $_REQUEST["id"] == $row["id"]){
            // si me envias un parametro id y coincide con el de la linea pones esto
            echo "<tr>";
            echo "<form method='post' action='update.php' enctype='multipart/form-data'>";
            echo "<td><input type='text' id='id' name='id' value='".$row["id"]."'></td>";
            echo "<td><input type='text' id='nombre' name='nombre' value='".$row["nombre"]."'></td>";
            echo "<td><input type='text' id='horaEntrada' name='horaEntrada' value='".$row["horario"]."'></td>";
            echo "<td><input type='submit' value='Guardar'></td>";
            echo "</form>";
            echo "</tr>";
        } else {
            // si todo es normal se ejecute este trozo
            echo "<tr>";
            echo "<td width='20%'>".$row["id"]."</td>";
            echo "<td width='20%'>".$row["nombre"]."</td>";
            echo "<td width='40%'>".$row["horario"]."</td>";
            echo "<td><a href='delete.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Borrar</button></a>";
            echo " <a href='productos.php?id=".$row['id']."'><button type='button' class='btn btn-warning'>Modificar</button></a></td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    $mysqli->close();
?>
