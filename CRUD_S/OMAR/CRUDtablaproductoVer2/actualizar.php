<?php
if(!empty($_POST)){
	if(isset($_POST["desc_producto"]) &&isset($_POST["cant_producto"]) &&isset($_POST["precio_unitario"]) &&isset($_POST["val_total_producto"]) &&isset($_POST["subt_producto"]) &&isset($_POST["total_pagar"]) ){
		if($_POST["desc_producto"]!=""&& $_POST["val_total_producto"]!=""&&$_POST["total_pagar"]!=""){
			include "conexion.php";
			
		$sql = "update producto set desc_producto=\"$_POST[desc_producto]\",cant_producto=\"$_POST[cant_producto]\",precio_unitario=\"$_POST[precio_unitario]\",val_total_producto=\"$_POST[val_total_producto]\",subt_producto=\"$_POST[subt_producto]\",total_pagar=\"$_POST[total_pagar]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='ver.php';</script>";

			}
		}
	}
}

?>