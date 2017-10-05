<?php
include "conexion.php";

echo($_GET['id']);

$sql1=  "select cliente.PKNIdentificacion,cliente.Direccion,cliente.Telefono,cliente.NombreCli,cliente.Apellido,cliente.Email,recibo.NombreR,menu.NombrePlato,tipodocumento.TipoDocumento,ciudad.NombreC,email.Asunto,frecuencia.FrecuenciaDeCompra,descuento.PorcentajeDescuento,cajero.Nombre from cliente inner join recibo on cliente.FKIDRecibo=recibo.PKIDRecibo inner join  menu on menu.PKIDPlato=cliente.FKIDMenu inner join TipoDocumento on Tipodocumento.PKIDTipoDocumento=cliente.FKIDTipoDocumento inner join ciudad on cliente.FKIDCiudad=ciudad.PKIDCiudad inner join email on cliente.FKIDEmail=email.PKIDEmail inner join Frecuencia on cliente.FKIDFrecuencia=Frecuencia.PKIDFrecuencia inner join descuento on Descuento.PKIDDescuento=cliente.FKIDDescuento inner join cajero on cajero.PKNCajero=cliente.FKIDCajero and cliente.PKNIdentificacion=".$_GET['id'];

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

<form role="form" method="post" action="actualizar.php">
  <div class="form-group">
    <label for="name">Identificacion</label>
    <input type="text" class="form-control" value="<?php echo $person->PKNIdentificacion; ?>" name="PKNIdentificacion" >
  </div>
  <div class="form-group">
    <label for="Direccion">Direccion</label>
    <input type="text" class="form-control" value="<?php echo $person->Direccion; ?>" name="Direccion" >
  </div>
  <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person->Telefono; ?>" name="Telefono">
  </div>
  <div class="form-group">
    <label for="NombreCli">Nombre Cliente</label>
    <input type="text" class="form-control" value="<?php echo $person->NombreCli; ?>" name="NombreCli" >
  </div>
  <div class="form-group">
    <label for="Apellido">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $person->Apellido; ?>" name="Apellido" >
  </div>
    <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" value="<?php echo $person->Email; ?>" name="Email" >
  </div>

    <div class="form-group">
    <label for="FKIDRecibo">Recibo</label>
    <input type="text" class="form-control" value="<?php echo $person->NombreR; ?>" name="FKIDRecibo">
  </div>
  <div class="form-group">
    <label for="FKIDMenu">Menu</label>
    <input type="text" class="form-control" value="<?php echo $person->NombrePlato; ?>" name="FKIDMenu" >
  </div>
  <div class="form-group">
    <label for="FKIDTipoDocumento">TipoDocumento</label>
    <input type="text" class="form-control" value="<?php echo $person->TipoDocumento; ?>" name="FKIDTipoDocumento" >
  </div>
    <div class="form-group">
    <label for="FKIDCiudad">Ciudad</label>
    <input type="text" class="form-control" value="<?php echo $person->NombreC; ?>" name="FKIDCiudad" >
  </div>
    <div class="form-group">
    <label for="FKIDEmail">Email</label>
    <input type="text" class="form-control" value="<?php echo $person->Email; ?>" name="FKIDEmail">
  </div>
  <div class="form-group">
    <label for="FKIDFrecuencia">Frecuencia</label>
    <input type="text" class="form-control" value="<?php echo $person->FrecuenciaDeCompra; ?>" name="FKIDFrecuencia" >
  </div>
  <div class="form-group">
    <label for="FKIDDescuento">Descuento</label>
    <input type="text" class="form-control" value="<?php echo $person->PorcentajeDescuento; ?>" name="FKIDDescuento" >
  </div>
    <div class="form-group">
    <label for="FKIDCajero">Cajero</label>
    <input type="text" class="form-control" value="<?php echo $person->Nombre; ?>" name="FKIDCajero" >
  </div>




  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">NO ES POR PREOCUPARTE PERO NO FUNCIONA ESTA JODA. REVISA</p>
<?php endif;?>