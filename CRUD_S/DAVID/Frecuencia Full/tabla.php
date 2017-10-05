<?php

include "conexion.php";

$user_pkncajero=null;
$sql1= "select * from Frecuencia ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-striped table-bordered col-md-12">
<thead>
  <th>Frecuencia</th>
  <th>Fecha Primer Compra</th>
  <th>Fecha Compra</th>
  <th>Fecha Limite</th>
  <th>Hora Compra</th>
  <th>Frecuencia De Compra</th>
 
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
  <td><?php echo $r["PKIDFrecuencia"]; ?></td>
  <td><?php echo $r["FechaPrimerCompra"]; ?></td>
  <td><?php echo $r["FechaCompra"]; ?></td>
  <td><?php echo $r["FechaLimite"]; ?></td>
  <td><?php echo $r["HoraCompra"]; ?></td>
  <td><?php echo $r["FrecuenciaDeCompra"]; ?></td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
  <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

  