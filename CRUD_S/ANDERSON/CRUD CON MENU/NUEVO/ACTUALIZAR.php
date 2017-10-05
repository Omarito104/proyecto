<!DOCTYPE>
<html>
<head>
<title>ACTUALIZAR ALUMNOS</title>
</head>
<body>
	<?php
		include("CONEXION BD.php");
	?>
<form action="ACTUALIZAR.php" method="POST">
		RECIBO: <input type="text" required name="txtRECIBO" placeholder="recibo..."> <br/>
		NOMBRE R: <input type="text" required name="txtNOMBRE" placeholder="nombre..."> <br/>
		DIRECCION R: <input type="text" required name="txtDIRECCION" placeholder="direccion..."> <br/>
		TELEFONO R: <input type="text" required name="txtTELEFONO" placeholder="telefono..."> <br/>
		<input type="submit" value="ACTUALIZAR" name="btnACTUALIZAR">
</form>
<?php
	if($_POST){
	
	$rec = $_POST['txtRECIBO'];
	$nom = $_POST['txtNOMBRE'];
	$dir = $_POST['txtDIRECCION'];
	$tel = $_POST['txtTELEFONO'];
	
	mysqli_query ($conexion, "UPDATE recibo set NombreR='$nom', DireccionR='$dir', TelefonoR='$tel'
	where PKIDRecibo='$rec'") or die ("Error al actualizar");
	
	mysqli_close($conexion);
	echo "Datos actualizados";
}
?>
<p align="left"><a href="MENU.html">VOLVER</a></p>
</body>
</html>







