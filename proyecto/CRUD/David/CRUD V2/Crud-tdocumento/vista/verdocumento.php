<?php 
	require_once ('../model/class.conexion.php');
	require_once ('../model/class.consultas.php');
	require_once ('../controller/cargar.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Documentos</title>
 	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

 </head>
 <body>
 <center>
 	<h1>  Mis Documentos </h1>

 	<div>
 		<form method="get">
 			<input type="text" name="buscar">
 			<input type="submit" value="Buscar">
 		</form>
 	</div>

 	<?php 
 		if(isset($_GET['buscar'])){
 			buscar($_GET['buscar']);
 		}else{
 			cargar();
 		}	
 	?>

 	<div><a href="insertar.html"> Nuevo registro </a><div>

 
 </body>
 </html>