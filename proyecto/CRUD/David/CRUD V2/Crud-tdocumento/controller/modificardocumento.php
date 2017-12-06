<?php

	require_once ('../model/class.conexion.php');
	require_once ('../model/class.consultas.php');

	$msj = null;
	$consultas = new Consultas();
	
	$TipoDocumento     = $_POST['TipoDocumento'];
	$idTipoDocumento    = $_POST['idTipoDocumento'];



	if(strlen($TipoDocumento) > 0 && strlen($TipoDocumento) > 0 ){

		$msj = $consultas->modificar("TipoDocumento", $TipoDocumento, $idTipoDocumento);
		$msj = $consultas->modificar("idTipoDocumento", $idTipoDocumento, $idTipoDocumento);
		
		echo $msj;
		echo "<div><a href='../Vista/verdocumento.php'> Ver Documentos</div>";
	}else{
		echo "Por favor complete todos los campos";
	}

 ?>