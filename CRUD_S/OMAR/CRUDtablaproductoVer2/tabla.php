<?php

include "conexion.php";

$user_PKIDProducto=null;
$sql1= "select * from producto where id_producto like '%$_GET[s]%' or desc_producto like '%$_GET[s]%' or cant_producto like '%$_GET[s]%' or precio_unitario like '%$_GET[s]%' or val_total_producto like '%$_GET[s]%' or subt_producto like '%$_GET[s]%' or total_pagar like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>ID Producto</th>
	<th>Descripcion</th>
	<th>Cantidad del Producto</th>
	<th>Precio Unitario</th>
	<th>Valor Total del Poducto</th>
	<th>SubTotal</th>
	<th>Total a Pagar</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["desc_producto"]; ?></td>
	<td><?php echo $r["cant_producto"]; ?></td>
	<td><?php echo $r["precio_unitario"]; ?></td>
	<td><?php echo $r["val_total_producto"]; ?></td>
	<td><?php echo $r["subt_producto"]; ?></td>
	<td><?php echo $r["total_pagar"]; ?></td>
	<td style="width:150px;">
		<a href="editar.php?id_producto=<?php echo $r["id_producto"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id_producto"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id_producto"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="eliminar.php?id_producto="+<?php echo $r["id_producto"];?>;

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