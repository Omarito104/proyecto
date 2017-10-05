<?php
include "conexion.php";

$user_PKNCajero=null;
$sql1= "select * from cajero where PKNCajero = ".$_POST["PKNCajero"];
$query = $con->query($sql1);
$cajero = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $cajero=$r;
  break;
}

  }
?>

<?php if($cajero!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group col-md-6">
      <label for="">Tipo Documento</label>
      <select class="form-control" name="FKIDTipoDocumento" value="<?php echo $cajero->FKIDTipoDocumento; ?>">
      <option>Selecione..</option>
        <option class="form-control" value="1">1</option>
        <option class="form-control" value="2">2</option>
        <option class="form-control" value="3">3</option>
        <option class="form-control" value="4">4</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="name">N° Cedula</label>
      <input type="hidden" class="form-control" name="PKNCajero" value="<?php echo $cajero->PKNCajero; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Direccion Domicilio</label>
      <input type="text" class="form-control" name="DireccionC" value="<?php echo $cajero->DireccionC; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Telefono/Celular</label>
      <input type="" class="form-control" name="TelefonoC" value="<?php echo $cajero->TelefonoC; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Nombres</label>
      <input type="" class="form-control" name="Nombre" value="<?php echo $cajero->Nombre; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Apellidos</label>
      <input type="text" class="form-control" name="Apellido" value="<?php echo $cajero->Apellido; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Email</label>
      <input type="email" class="form-control" name="Email" value="<?php echo $cajero->Email; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="address">Fecha Nacimiento-Use formato AA-MM-DD</label>
      <input type="date" class="form-control" name="FechaNacimiento" value="<?php echo $cajero->FechaNacimiento; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Ciudad</label>
      <select class="form-control" name="FKIDCiudad" value="<?php echo $cajero->FKIDCiudad; ?>">
        <option>Selecione..</option>
        <option class="form-control" value="1">1</option>
        <option class="form-control" value="2">2</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Estado</label>
      <select class="form-control" name="FKIDEstado" value="<?php echo $cajero->FKIDEstado; ?>">
        <option>Selecione..</option>
        <option class="form-control" value="1">1</option>
        <option class="form-control" value="2">2</option>
      </select>
    </div>
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>