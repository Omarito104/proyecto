<?php

if(!empty($_POST)){
	if(&&isset($_POST["DireccionC"]) &&isset($_POST["TelefonoC"]) &&isset($_POST["Nombre"]) &&isset($_POST["Apellido"]) &&isset($_POST["Email"]) &&isset($_POST["FechaNacimiento"]) &&isset($_POST["FKIDTipoDocumento"]) &&isset($_POST["FKIDCiudad"]) &&isset($_POST["FKIDEstado"])){
			include "conexion.php";

			$sql = "update cajero set DireccionC=\"$_POST[DireccionC]\",TelefonoC=\"$_POST[TelefonoC]\",Nombre=\"$_POST[Nombre]\",Apellido=\"$_POST[Apellido]\",Email=\"$_POST[Email]\",FechaNacimiento=\"$_POST[FechaNacimiento]\",FKIDTipoDocumento=\"$_POST[FKIDTipoDocumento]\",FKIDCiudad=\"$_POST[FKIDCiudad]\",FKIDEstado=\"$_POST[FKIDEstado]\" where PKNCajero=".$_POST["pkncajero"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

		}
	}
}



?>