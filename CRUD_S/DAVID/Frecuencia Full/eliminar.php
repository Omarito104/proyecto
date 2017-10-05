<?php

 include ("conexion.php");

$ID_Frecuencia=$_REQUEST['ID_Frecuencia'];


$query="DELETE FROM Frecuencia WHERE ID_Frecuencia='$ID_Frecuencia' ";
$resultado=$conexion->query($query);

if($resultado){
    header ("location: tabla.php");
}else {
    echo "insercion no exitosa";
}

?>