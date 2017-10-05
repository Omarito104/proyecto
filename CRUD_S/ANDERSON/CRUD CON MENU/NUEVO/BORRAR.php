<!DOCTYPE>
<html>
<head>
<title>ELIMINAR ALUMNOS</title>
</head>
<body>
	<?php
		include("CONEXION BD.php");
	?>
<form action="BORRAR.php" method="POST">
	RECIBO: <input type="text" required name="txtRECIBO" placeholder="recibo..."> <br/>
	<input type="submit" value="ELIMINAR" name="btnELIMINAR">
</form>
<?php
	if($_POST){
	
	$rec = $_POST['txtRECIBO'];
	
	mysqli_query($conexion, "DELETE from recibo where PKIDRecibo='$rec'")
		or die ("Error al eliminar");
	
	mysqli_close($conexion);
	echo "Dato eliminado";
}
?>
<p align="left"><a href="MENU.html">VOLVER</a></p>
</body>
</html>
