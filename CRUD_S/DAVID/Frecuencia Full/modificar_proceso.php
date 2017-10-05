<?php

 include ("conexion.php");

$ID_Frecuencia=$_REQUEST['ID_Frecuencia'];
$ID_Frecuencia = $_POST["ID_Frecuencia"];
$Fecha_de_primer_compra = $_POST["Fecha_de_primer_compra"];
$Fecha_compra =  $_POST["Fecha_compra"];
$Fecha_limie = $_POST["Fecha_limie"];
$Hora_compra =  $_POST["Hora_compra"];
$Frecuencias_de_compra = $_POST["Frecuencias_de_compra"];

$query="UPDATE Frecuencia SET ID_Frecuencia='$ID_Frecuencia',Fecha_de_primer_compra='$Fecha_de_primer_compra',Fecha_compra='$Fecha_compra',Fecha_limie='$Fecha_limie',Hora_compra='$Hora_compra',Frecuencias_de_compra='$Frecuencias_de_compra' WHERE ID_Frecuencia='$ID_Frecuencia'";
$resultado=$conexion->query($query);

if($resultado){
    header ("location: tabla.php");
}else {
    echo "insercion no exitosa";
}

?>