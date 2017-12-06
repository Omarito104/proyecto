<?php

include_once 'Guppy\Controladorr/rolControlador.php';

?>

<!--Formulario-->

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Crud Rol</title>
		<link rel="stylesheet" type="text/css" href="../assets/style.css">
	</head>
	<body>
	
<!-- Formulario Nuevo Registro -->
	<br>
		<a id="btnRegistro" href="?action=ver&m=1">Nuevo Registro</a>
	<br><br>
	
	<div id="div_form">
	<?php if(!empty($_GET['m']) && !empty($_GET['action']) ){ ?>
		
		<form action="#" method="POST">		
			<label for="user_login">Rol</label>
			<input type="text" name="Rol" placeholder="Rol" required>

			<label for="user_pass">Estado Rol</label><br>
			ACTIVO<input type="radio" name="estado_rol" value="1" checked>
			INACTIVO<input type="radio" name="estado_rol" value="0">
			
			<br>
			<input type="submit" value="Guardar" onclick = "this.form.action = '?action=registrar';"/>
		</form>
	</div>
	<?php } ?> 
<!--Fin Formulario Nuevo Registro -->

<!-- Formulario Actualizar Registro -->
	
	<div id="div_form">
	
	<?php if(!empty($_GET['Rol']) && !empty($_GET['action']) ){ ?>
		<form action="#" method="post">
		<!--<label>Rol por modificar: <?php echo $rol->__GET('Rol'); ?></label> -->

			<label>Rol por Modificar:</label>

			<br><input type="text" name="Rol" value="<?php echo $rol->__GET('Rol'); ?>" style="display:none" placeholder="ROL" required>

			<br><br><input type="text" name="Rol2" id="user_login" value="<?php echo $rol->__GET('Rol');?>" placeholder="ROL" required>

			<br><label>Estado rol: </label></br>
			<br>ACTIVO <input type="radio" name="estado_rol" value="1" checked="<?php echo ($rol->__GET('estado_rol') == 1)?'checked':''; ?>">

			<br>INACTIVO <input type="radio" name="estado_rol" value="0" checked="<?php echo ($rol->__GET('estado_rol') == 0)? 'checked':'';?>">
			
			<br><input type="submit" value="Actualizar" onclick = "this.form.action = '?action=actualizar';"/>
		</form>
	</div>
	
	<?php }; 
//Fin formulario actualizar Registro

	$sqli= "SELECT * FROM rol";
	$query = $db ->query($sqli);
	if($query->rowCount()>0):?>
	
	<br><h1>Roles del sistema</h1> <br>
		<table>
			<thead>
				<tr>
					<th>Rol</th>
					<th>Estado Rol</th>
					<th>Funcion Editar</th>
					<th>Funcion Eliminar</th>
				</tr>
			</thead>
	
	<?php foreach($model->Listar_Rol()as $r): ?>
		<tr>
			<td><?php echo $r->__GET('Rol');?></td>
			<td><?php
				if($r->__GET('estado_rol')== 1){
					echo "ACTIVO";
				}else{
					echo "INACTIVO";
				}?></td>
				
			<td>
			<a href="?action=editar&Rol=<?php echo $r->Rol; ?>">Editar</a>
			</td>
			
			<td>
			<a href="?action=eliminar&Rol=<?php echo $r->Rol; ?>" onclick="return alert('¿Esta seguro que quiere eliminar este usuario?')">Eliminar</a>
			</td>
		</tr>
		
	<?php endforeach; ?>
	
		</table>
		
	<?php else:?>
	
		<h4 class="alert alert-danger">Señor usuario no hay Roles Registrados.</h4>
		
	<?php endif;?>
	
	</body>
	</html>