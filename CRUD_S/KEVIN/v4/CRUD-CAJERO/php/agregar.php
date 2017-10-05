<?php

if(!empty($_POST)){
	if(isset($_POST["PKNCajero"]) &&isset($_POST["DireccionC"]) &&isset($_POST["TelefonoC"]) &&isset($_POST["Nombre"]) &&isset($_POST["Apellido"]) &&isset($_POST["Email"]) &&isset($_POST["FechaNacimiento"]) &&isset($_POST["FKIDTipoDocumento"]) &&isset($_POST["FKIDCiudad"]) &&isset($_POST["FKIDEstado"])){
			include "conexion.php";
			
			$sql = "insert into cajero(PKNCajero,DireccionC,TelefonoC,Nombre,Apellido,Email,FechaNacimiento,FKIDTipoDocumento,FKIDCiudad,FKIDEstado) value (\"$_POST[PKNCajero]\",\"$_POST[DireccionC]\",\"$_POST[TelefonoC]\",\"$_POST[Nombre]\",\"$_POST[Apellido]\",\"$_POST[Email]\",\"$_POST[FechaNacimiento]\",\"$_POST[FKIDTipoDocumento]\",\"$_POST[FKIDCiudad]\",\"$_POST[FKIDEstado]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}




?>