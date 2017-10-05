<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from producto where id_producto = ".$_GET["id_producto"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="desc_producto">Descripcion del producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->desc_producto; ?>" name="desc_producto" required>
  </div>
  <div class="form-group">
    <label for="cant_producto">Cantidad del producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->cant_producto; ?>" name="cant_producto" required>
  </div>
  <div class="form-group">
    <label for="precio_unitario">Precio unitario</label>
    <input type="text" class="form-control" value="<?php echo $producto->precio_unitario; ?>" name="precio_unitario" required>
  </div>
  <div class="form-group">
    <label for="val_total_producto">Valor total del producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->val_total_producto; ?>" name="val_total_producto" >
  </div>
  <div class="form-group">
    <label for="subt_producto">subtotal del producto</label>
    <input type="text" class="form-control" value="<?php echo $producto->subt_producto; ?>" name="subt_producto" >
  </div>
  <div class="form-group">
    <label for="total_pagar">Total a pagar</label>
    <input type="text" class="form-control" value="<?php echo $producto->total_pagar; ?>" name="total_pagar" >
  </div>
<input type="hidden" name="id_producto" value="<?php echo $producto->id_producto; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">No se encuentra</p>
<?php endif;?>