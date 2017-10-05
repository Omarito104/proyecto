<!DOCTYPE>
<html>
<head>
<title>REGISTRAR ALUMNOS</title>
</head>
<body>
	<?php
		include("CONEXION BD.php");
	?>

<form action="" method="POST">
		RECIBO: <input type="text" required name="txtRECIBO"> <br/>
		NOMBRE R: <input type="text" required name="txtNOMBRE"> <br/>
		DIRECCION R: <input type="text" required name="txtDIRECCION"> <br/>
		TELEFONO R: <input type="text" required name="txtTELEFONO"> <br/>
		FECHA: <input type="date" required name="txtFECHA"> <br/>
		FRECUENCIA: <input type="text" required name="txtFRECUENCIA"> <br/>
		REPORTES: <input type="text" required name="txtREPORTES"> <br/>
		CAJERO: <input type="text" required name="txtCAJERO"> <br/>
		<input type="submit" value="ENVIAR" required name="btnENVIAR">
</form>

<?php
	if($_POST){
		$rec = $_POST['txtRECIBO'];
		$nom = $_POST['txtNOMBRE'];
		$dir = $_POST['txtDIRECCION'];
		$tel = $_POST['txtTELEFONO'];
		$fec = $_POST['txtFECHA'];
		$fre = $_POST['txtFRECUENCIA'];
		$rep = $_POST['txtREPORTES'];
		$caj = $_POST['txtCAJERO'];

	$insertar = "INSERT into recibo values 
		('$rec', '$nom', '$dir', '$tel', '$fec', '$fre','$rep', '$caj')";
	$resultado = mysqli_query($conexion, $insertar)
		or die ("Error al registrar los datos");

	mysqli_close($conexion);
	echo "Los datos fueron registrados";

}
?>
<p align="left"><a href="MENU.html">VOLVER</a></p>
</body>
</html>





















