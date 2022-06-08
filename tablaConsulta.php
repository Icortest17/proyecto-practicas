<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$host="192.168.1.10";
$usuario="admin";
$contraseña="admin";
$base="prueba";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$respuesta=$conexion->query("SELECT * FROM bienvenido where nombre in (select nombre from usuarios)");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table" style="font-size:12px; margin-top:-1%;">

				<tr class="active">
					<th style="text-align: center">BIENVENIDO</th>
				</tr>';

				if($nombre = $respuesta->fetch_array(MYSQLI_BOTH)){
					
						echo'<tr>
						 
						 	<td style="text-align: center">'.$nombre['nombre'].'</td>
	
						 	</tr>';
						
				}else{

					echo'<tr>
						 
						 	<td style="text-align: center">Introduzca su codigo qr	
							 	</td>
	
						 	</tr>';

				};
				echo '</table>';
?>