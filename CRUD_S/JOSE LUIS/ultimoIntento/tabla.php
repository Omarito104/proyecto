<?php

include "conexion.php";

$user_id=null;
$sql1= "select cliente.PKNIdentificacion,cliente.Direccion,cliente.Telefono,cliente.NombreCli,cliente.Apellido,cliente.Email,recibo.NombreR,menu.NombrePlato,tipodocumento.TipoDocumento,ciudad.NombreC,email.Asunto,frecuencia.FrecuenciaDeCompra,descuento.PorcentajeDescuento,cajero.Nombre from cliente inner join recibo on cliente.FKIDRecibo=recibo.PKIDRecibo inner join  menu on menu.PKIDPlato=cliente.FKIDMenu inner join TipoDocumento on Tipodocumento.PKIDTipoDocumento=cliente.FKIDTipoDocumento inner join ciudad on cliente.FKIDCiudad=ciudad.PKIDCiudad inner join email on cliente.FKIDEmail=email.PKIDEmail inner join Frecuencia on cliente.FKIDFrecuencia=Frecuencia.PKIDFrecuencia inner join descuento on Descuento.PKIDDescuento=cliente.FKIDDescuento inner join cajero on cajero.PKNCajero=cliente.FKIDCajero;";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover" >
<thead>
	<th>Identificacion</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Recibo</th>
	<th>Menu</th>
	<th>TipoDocumento</th>
	<th>Ciudad</th>	
	<th>Email</th>
	<th>Frecuencia</th>
	<th>Descuento</th>
	<th>Cajero</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td value="<?php echo $r["PKNIdentificacion"]; ?>"><?php echo $r["PKNIdentificacion"]; ?></td>
	<td><?php echo $r["Direccion"]; ?></td>
	<td><?php echo $r["Telefono"]; ?></td>
	<td><?php echo $r["NombreCli"]; ?></td>
	<td><?php echo $r["Apellido"]; ?></td>
	<td><?php echo $r["Email"]; ?></td>
	<td><?php echo $r["NombreR"]; ?></td>
	<td><?php echo $r["NombrePlato"]; ?></td>
	<td><?php echo $r["TipoDocumento"]; ?></td>
	<td><?php echo $r["NombreC"]; ?></td>
	<td><?php echo $r["Asunto"]; ?></td>
	<td><?php echo $r["FrecuenciaDeCompra"]; ?></td>
	<td><?php echo $r["PorcentajeDescuento"]; ?></td>
	<td><?php echo $r["Nombre"]; ?></td>
	<td style="width:150px;">

		<a href="./formulario.php?id=<?php echo $r["PKNIdentificacion"];?>">Editar</a>;
		<a href= class="btn btn-sm btn-danger">>>Eliminar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
