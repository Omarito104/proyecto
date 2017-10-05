<?php

if(!empty($_POST)){
	if(isset($_POST["PKNIdentificacion"]) && isset($_POST["Direccion"]) &&isset($_POST["Telefono"]) &&isset($_POST["NombreCli"]) &&isset($_POST["Apellido"])  &&isset($_POST["Email"]) &&isset($_POST["FKIDRecibo"]) &&isset($_POST["FKIDMenu"]) &&isset($_POST["FKIDTipoDocumento"]) &&isset($_POST["FKIDCiudad"]) &&isset($_POST["FKIDEmail"]) &&isset($_POST["FKIDFrecuencia"]) &&isset($_POST["FKIDDescuento"]) &&isset($_POST["FKIDCajero"])){
		
			include "conexion.php";
			
			$sql = "update cliente set Direccion=\"$_POST[Direccion]\",Telefono=\"$_POST[Telefono]\",NombreCli=\"$_POST[NombreCli]\",Apellido=\"$_POST[Apellido]\",Email=\"$_POST[Email]\",NombreR=\"$_POST[FKIDRecibo]\",NombrePlato=\"$_POST[FKIDMenu]\",TipoDocumento=\"$_POST[FKIDTipoDocumento]\",NombreC=\"$_POST[FKIDCiudad]\",Asunto=\"$_POST[FKIDEmail]\",FrecuenciaDeCompra=\"$_POST[FKIDFrecuencia]\",PorcentajeDescuento=\"$_POST[FKIDDescuento]\",Nombre=\"$_POST[FKIDCajero]\" where PKNIdentificacion=".$_POST["PKNIdentificacion"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='verCliente.php';</script>";
			}else{
				print "<script>alert(\"MI PEZ, NO ACTUALIZO.\");window.location='verCliente.php';</script>";

			}
		
	}
}



?>