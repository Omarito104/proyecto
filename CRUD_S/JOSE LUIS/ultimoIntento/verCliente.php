<html>
	<head>
	</head>
	<body>
  <center>
  <style type="text/css">
      div{
      
      padding 100px 40 px;
     
      width: 290px;
      border-radius:10px 10px 5px 5px;
      -moz-border-radius:10px;/*compatibilidad con firefox */

      }
</style>
<img src="logo.png" width=250px height="120px"/></div><h2> CLIENTES PESCADERIA </h2>

		 



           
<form role="form" method="post" action="agregarCliente.php">

  <div class="form-group">
    <label for="PKNIdentificacion">Identificacion</label>
    <input type="text" class="form-control" name="PKNIdentificacion" required>
  </div>
  <div class="form-group">
    <label for="Direccion">Direccion</label>
    <input type="text" class="form-control" name="Direccion" required>
  </div>
  <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name="Telefono" required>
  </div>
  <div class="form-group">
    <label for="NombreCli">Nombre</label>
    <input type="text" class="form-control" name="NombreCli" >
  </div>
  <div class="form-group">
    <label for="Apellido">Apellido</label>
    <input type="text" class="form-control" name="Apellido" >
  </div>
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" name="Email" >
  </div>
    <div class="form-group">
    <label for="FKIDRecibo">Recibo</label>
    <input type="text" class="form-control" name="FKIDRecibo" >
  </div>
  <div class="form-group">
    <label for="FKIDMenu"> Menu</label>
    <input type="text" class="form-control" name="FKIDMenu" >
  </div>
  <div class="form-group">
    <label for="FKIDTipoDocumento"> Tipo documento</label>
    <input type="text" class="form-control" name="FKIDTipoDocumento" >
  </div>
  <div class="form-group">
    <label for="FKIDCiudad"> Ciudad</label>
    <input type="text" class="form-control" name="FKIDCiudad" >
  </div>
    <div class="form-group">
    <label for="FKIDEmail"> Email</label>
    <input type="text" class="form-control" name="FKIDEmail">
  </div>
  <div class="form-group">
    <label for="FKIDFrecuencia"> Frecuencia</label>
    <input type="text" class="form-control" name="FKIDFrecuencia">
  </div>
  <div class="form-group">
    <label for="FKIDDescuento"> Descuento</label>
    <input type="text" class="form-control" name="FKIDDescuento" >
  </div>
  <div class="form-group">
    <label for="FKIDCajero"> Cajero</label>
    <input type="text" class="form-control" name="FKIDCajero" >
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
  </center>

</form>


  <?php include "tabla.php";?>

   





	</body>
</html>