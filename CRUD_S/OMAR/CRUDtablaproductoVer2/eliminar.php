<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM producto WHERE id_producto=".$_GET["id_producto"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='ver.php';</script>";

			}
				}