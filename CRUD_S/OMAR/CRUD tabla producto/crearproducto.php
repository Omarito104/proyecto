<?php
if(!empty($_POST)){
	if(isset($_POST ["PKIDProducto"] )) &&isset($_POST["DescripcionProducto"]) &&isset($_POST["CantidadProducto"]) &&isset($_POST["PrecioUnitario"]))&&isset($_POST["PrecioUnitario"]))&&isset($_POST["ValorTotalProducto"]))&&isset($_POST["SubTotal"]))&&isset($_POST["TotalAPagar"])){
		if($_POST["PKIDProducto"]!=""&& $_POST["DescripcionProducto"]!=""&&$_POST["CantidadProducto"]!="" &&$_POST["PrecioUnitario"]!="" &&$_POST["ValorTotalProducto"]!="" &&$_POST["SubTotal"]!="" &&$_POST["TotalAPagar"]!=""){
			include "conexion.php";
			
			$sql = "insert into producto(PKIDProducto,DescripcionProducto,CantidadProducto,PrecioUnitario,ValorTotalProducto,SubTotal,TotalAPagar) 
			value (\"$_POST[PKIDProducto]\",\"$_POST[DescripcionProducto]\",\"$_POST[CantidadProducto]\",\"$_POST[PrecioUnitario]\",\"$_POST[ValorTotalProducto]\",\"$_POST[SubTotal]\",\"$_POST[TotalAPagar]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
	
}



?>