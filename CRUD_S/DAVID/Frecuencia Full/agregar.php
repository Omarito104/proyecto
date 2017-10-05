<?php

if(!empty($_POST)){
	if(isset($_POST["PKIDFrecuencia"]) &&isset($_POST["FechaPrimerCompra"]) &&isset($_POST["FechaCompra"]) &&isset($_POST["FechaLimite"]) &&isset($_POST["HoraCompra"]) &&isset($_POST["FrecuenciaDeCompra"]) ){
			include "conexion.php";
			
			$sql = "insert into Frecuencia(PKIDFrecuencia,FechaPrimerCompra,FechaCompra,FechaLimite,HoraCompra,FrecuenciaDeCompra) value (\"$_POST[PKIDFrecuencia]\",\"$_POST[FechaPrimerCompra]\",\"$_POST[FechaCompra]\",\"$_POST[FechaLimite]\",\"$_POST[HoraCompra]\",\"$_POST[FrecuenciaDeCompra]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='ver.php';</script>";

			}
		}
	}



?>