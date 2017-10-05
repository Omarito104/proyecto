<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from producto where PKIDProducto = ".$_GET["PKIDProducto"];
$query = $con->query($sql1);
$producto = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $producto=$r;
  break;
}

  }
?>
<?php if($producto!=null):?>

<form role="form" method="post" action="php/actualizar.php">
<div class="form-group">
<label for="name">id producto</label>
<input type="text" class="form-control" value="<?php echo $person->id producto; ?>" name="PKIDProducto" placeholder="escriba su codigo" required >
</div>
<div class="form-group">
<label for="name">Descripcion</label>
<input type="text" class="form-control" value="<?php echo $person->Descripcion; ?>" name="Descripcion" placeholder="escriba la descripcion del producto" required >
</div>
<div class="form-group">
<label for="name">Precio unitario</label>
<input type="text" class="form-control" value="<?php echo $person->Precio unitario; ?>" name="PrecioUnitario" placeholder="escriba el precio unitario" required >
</div>
<div class="form-group">
<label for="name">Valor total del producto</label>
<input type="text" class="form-control" value="<?php echo $person->Valor tota del producto; ?>" name="ValorTotalProducto" placeholder="escriba el valor total del producto" required >
</div>
<div class="form-group">
<label for="name">Subtotal</label>
<input type="text" class="form-control" value="<?php echo $person->Subtotal; ?>" name="SubTotal" placeholder="escriba el Sub total" required >
</div>
<div class="form-group">
<label for="name">Total a pagar</label>
<input type="text" class="form-control" value="<?php echo $person->Total a pagar; ?>" name="TotalAPagar " placeholder="escriba el total a pagar" required >
</div>
<input type="hidden" name="FKIDProducto" value="<?php echo $producto->FKIDProducto; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>