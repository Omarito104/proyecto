<?php
if(!empty($_POST)){
	if(isset($_POST["desc_producto"]) &&isset($_POST["cant_producto"]) &&isset($_POST["precio_unitario"]) &&isset($_POST["val_total_producto"]) &&isset($_POST["subt_producto"]) &&isset(["total_pagar"])){
		if($_POST["desc_producto"]=!"" &&$_POST["cant_producto"]=!"" &&$_POST["precio_unitario"]=!"" &&$_POST["val_total_producto"]=!"" &&$_POST["subt_producto"]=!"" &&$_POST["total_pagar"]=!""){
			include "conexion.php";
			$sql="insert into producto(desc_producto,cant_producto,precio_unitario,val_total_producto,subt_producto,total_pagar)
			value(\"$_POST[desc_producto]\",\"$_POST[cant_producto]\",\"$_POST[precio_unitario]\",\"$_POST[val_total_producto]\",\"$_POST[subt_producto]\",\"$_POST[total_pagar]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print"<script>alert(\"Agregado exitosamente.\");window.location='ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='ver.php';</script>";
			}
		}	
	}
?>