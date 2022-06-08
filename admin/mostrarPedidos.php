<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
  	
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="productos.php">Control de Usuarios/admin</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">USUARIOS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="mostrarPedidos.php">RETRASOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <br />
    <br />
    <br />
    <table class="table table-striped table-bordered">
    		<th>id_retraso</th>
    		<th>id_usuario</th>
    		<th>nombre</th>
    		<th>hora_llegada</th>
    		
    <?php
    
  	$mysqli = new mysqli("192.168.1.10", "admin", "admin", "prueba");
    $sql = "SELECT * FROM retrasos";
    $result = $mysqli->query($sql);
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
            echo "<td width='20%'>".$row["id_retraso"]."</td>";
            echo "<td width='20%'>".$row["id_usuario"]."</td>";
            echo "<td width='40%'>".$row["nombre"]."</td>";
            echo "<td width='40%'>".$row["hora_llegada"]."</td>";
            echo "</tr>";
            }
	?>
	</table>
</body>

</html>
