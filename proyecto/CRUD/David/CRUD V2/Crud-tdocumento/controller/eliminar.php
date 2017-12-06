<?php 
require_once ('../model/class.conexion.php');
require_once ('../model/class.consultas.php');

if(isset($_GET['idTipoDocumento'])){
$idTipoDocumento = $_GET['idTipoDocumento'];

$consultas = new consultas();
$mensaje = $consultas->eliminar($idTipoDocumento);
echo $mensaje;

echo "<div><a href='../Vista/verdocumento.php'>Volver a documentos</a></div>";
}
?>
