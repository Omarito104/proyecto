<!DOCTYPE>
<html>
<head>
<title>ELIMINAR ALUMNOS</title>
</head>
<body>
	<?php
		include("CONEXION BD.php");
	?>
<form action="MOSTRAR.php">
		RECIBO: <input type="text" name="txtRECIBO"> <br/>
		<input type="submit" value="MOSTRAR" name="btnMOSTRAR">
</form>
<?php

	$mirar = mysqli_query($conexion, "SELECT * from recibo")
		or die ("Error al mostrar los datos");
	
	echo '<table border="1">';
	echo '<tr>';
	echo '<th id="PKIDRecibo">RECIBO</th>';
	echo '<th id="NombreR">NOMBRE R</th>';
	echo '<th id="DireccionR">DIRECCION R</th>';
	echo '<th id="TelefonoR">TELEFONO R</th>';
	echo '<th id="FechaRecibo">FECHA</th>';
	echo '<th id="FKIDFrecuencia">FRECUENCIA</th>';
	echo '<th id="FKIDReportes">REPORTES</th>';
	echo '<th id="FKIDCajero">CAJERO</th>';
	echo '</tr>';
	
	while ($extraer = mysqli_fetch_array($mirar))
		{
			echo '<tr>';
			echo '<td>'.$extraer['PKIDRecibo'].'</td>';
			echo '<td>'.$extraer['NombreR'].'</td>';
			echo '<td>'.$extraer['DireccionR'].'</td>';
			echo '<td>'.$extraer['TelefonoR'].'</td>';
			echo '<td>'.$extraer['FechaRecibo'].'</td>';
			echo '<td>'.$extraer['FKIDFrecuencia'].'</td>';
			echo '<td>'.$extraer['FKIDReportes'].'</td>';
			echo '<td>'.$extraer['FKIDCajero'].'</td>';
		}
	
	mysqli_close($conexion);
	echo '</table>';
	?>
<p align="left"><a href="MENU.html">VOLVER</a></p>
</body>
</html>












