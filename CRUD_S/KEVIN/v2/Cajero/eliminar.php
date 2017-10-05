<?php

if(!empty($_POST)){
	include "conexion.php";

	$sql = " delete from cajero WHERE PKNCajero=".$_POST["PKNCajero"];
	$query = $con->query($sql);
	if($query!=null){
		print "<script>alert(\"Eliminado exitosamente.\");window.location='ver.php';</script>";
	}else{
		print "<script>alert(\"No se pudo eliminar.\");window.location='ver.php';</script>";
	}
}

?>