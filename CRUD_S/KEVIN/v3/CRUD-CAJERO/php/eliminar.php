<?php

if(!empty($_GET)){
	include "conexion.php";
	$sql = "DELETE FROM cajero WHERE PKNCajero=".$_GET["PKNCajero"];
	$query = $con->query($sql);
	if($query!=null){
		print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver.php';</script>";
	}else{
		print "<script>alert(\"No se pudo eliminar.\");window.location='../ver.php';</script>";

	}
}

?>