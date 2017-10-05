<?php

include "conexion.php";

$user_PKIDProducto=null;
$sql1= "select * from producto where PKIDProducto like '%$_GET[s]%' or Descripcion like '%$_GET[s]%' or CantidadProducto like '%$_GET[s]%' or PrecioUnitario like '%$_GET[s]%' or ValorTotalPoducto like '%$_GET[s]%' or SubTotal like '%$_GET[s]%' or TotalAPagar like '%$_GET[s]%' ";
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
	<td><?php echo $r["PKIDProducto"]; ?></td>
	<td><?php echo $r["Descripcion"]; ?></td>
	<td><?php echo $r["CantidadProducto"]; ?></td>
	<td><?php echo $r["PrecioUnitario"]; ?></td>
	<td><?php echo $r["ValorTotalPoducto"]; ?></td>
	<td><?php echo $r["SubTotal"]; ?></td>
	<td><?php echo $r["TotalAPagar"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["PKIDProducto"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["PKIDProducto"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["PKIDProducto"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?PKIDProducto="+<?php echo $r["PKIDProducto"];?>;

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