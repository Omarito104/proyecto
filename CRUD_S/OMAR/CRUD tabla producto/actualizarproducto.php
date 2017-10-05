<?php

if(!empty($_POST)){
	if(isset($_POST["DescripcionProducto"]) &&isset($_POST["CantidadProducto"]) &&isset($_POST["PrecioUnitario"]) &&isset($_POST["ValorTotalProducto"]) &&isset($_POST["Subtotal"])&&isset($_POST["TotalAPagar"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			
			$sql = "update person set DescripcionProducto=\"$_POST[DescripcionProducto]\",CantidadProducto=\"$_POST[CantidadProducto]\",PrecioUnitario=\"$_POST[PrecioUnitario]\",ValorTotalProducto=\"$_POST[ValorTotalProducto]\",Subtotal=\"$_POST[Subtotal]\",=TotalAPagar\"$_POST[TotalAPagar]\" where id=".$_POST["PKIDProducto"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>