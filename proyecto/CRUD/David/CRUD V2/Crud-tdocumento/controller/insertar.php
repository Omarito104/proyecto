<?php 
	require_once ('../model/class.conexion.php'); 
	require_once ('../model/class.consultas.php');

	$mensaje = null;

	$idTipoDocumento = $_POST['idTipoDocumento'];
	$TipoDocumento   = $_POST['TipoDocumento'];

	if (strlen($TipoDocumento) > 0 && strlen($idTipoDocumento) > 0 && strlen($TipoDocumento) > 0){
		$consultas = new consultas();
		$mensaje = $consultas->insertar($idTipoDocumento, $TipoDocumento);
			echo "<br><a href='../vista/insertar.html'> Registar Nuevo Documento </a><br>";
			echo "<br><a href='../vista/verdocumento.php'> Ver Documentos </a><br> ";
		}else{
			echo "Por favor complete los campos";
			echo "<br><a href='../vista/insertar.html'> Ver Documento </a></br>";
		}
		echo $mensaje;
?> 