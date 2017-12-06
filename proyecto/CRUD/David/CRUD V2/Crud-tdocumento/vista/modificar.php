<?php 
	require_once ('../model/class.conexion.php');
	require_once ('../model/class.consultas.php');
	require_once ('../controller/seleccionar.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
<body>

	<h1> Modificar documento</h1>
	<?php 
		seleccionar();
	 ?>

</body>
</html>