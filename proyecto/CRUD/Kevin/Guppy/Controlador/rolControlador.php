<?php
require_once 'Rol.Entidad.php';
require_once '../Modelo/rolModel.php';
require_once '../Modelo/dbconfig.php';

$rol = new Rol();
$model = new Rolmodel();
$db = BaseDatos::Conexion();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar';
			$rol->__SET('Rol',					$_REQUEST['Rol']);
			$rol->__SET('estado_rol',			$_REQUEST['estado_rol']);
			$rol->__SET('Rol2',					$_REQUEST['Rol2']);
			
			$model->actualizar_Rol($rol);
			print "<script>alert(\"Registro Actualizado Exitosamente.\");window.location='rol_vista.php';</script>";
			break;

		case 'registrar';
			$rol->__SET('Rol',					$_REQUEST['Rol']);
			$rol->__SET('estado_rol',			$_REQUEST['estado_rol']);
			
			$model->Registrar_Rol($rol);
		
			print "<script>alert(\"Registro Agregado Exitosamente.\");window.location='rol_vista.php';</script>";
			break;

		case 'eliminar';
			$model->Eliminar_Rol($_REQUEST['Rol']);
			print"<script>alert(\"Registro Eliminado Exitosamente.\");window.location='rol_vista.php'</script>";
			break;

		case 'editar';
			$rol = $model->Obtener_Rol($_REQUEST['Rol']);
			break;
	}
}		
			
?>