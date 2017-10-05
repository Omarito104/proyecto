<?php

include "conexion.php";

$user_pkncajero=null;
$sql1= "select caj.pkncajero,caj.direccionc,caj.telefonoc,caj.nombre,caj.apellido,caj.email,caj.fechanacimiento,td.tipodocumento,ciudad.nombrec,estado.tipoestado from cajero as caj inner join tipodocumento as td on caj.fkidtipodocumento=td.pkidtipodocumento inner join ciudad on ciudad.pkidciudad=caj.fkidciudad inner join estado on estado.pkidestado=caj.fkidestado;";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-striped table-bordered col-md-12">
<thead>
	<th>N° Documento</th>
	<th>Tipo Documento</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Fecha Nacimiento</th>
	<th>Ciudad Org</th>
	<th>Estado</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["pkncajero"]; ?></td>
	<td><?php echo $r["tipodocumento"]; ?></td>
	<td><?php echo $r["direccionc"]; ?></td>
	<td><?php echo $r["telefonoc"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["apellido"]; ?></td>
	<td><?php echo $r["email"]; ?></td>
	<td><?php echo $r["fechanacimiento"]; ?></td>
	<td><?php echo $r["nombrec"]; ?></td>
	<td><?php echo $r["tipoestado"]; ?></td>
	<td>
		<a href="./editar.php?pkncajero=<?php echo $r["pkncajero"];?>">Editar</a>
		<a href="#" id="del-<?php echo $r["pkncajero"];?>">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["pkncajero"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?pkncajero="+<?php echo $r["pkncajero"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
