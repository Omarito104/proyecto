<!DOCTYPE html>
<html>
<?php include "conexion.php"; ?>
	<head>
		<title> CRUD CAJERO </title>
    <!-- Enlace de boostrap y js -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
    <meta charset="utf-8">
	</head>
	<body>
  <!-- formulario  para guardar datos del cajero -->
  <h4>Agregar Cajero</h4>
  <form role="form" method="post" action="agregar.php">
    <div class="form-group col-md-6">
      <label for="">Tipo Documento</label>
      <select class="form-control" name="FKIDTipoDocumento">
        <option>Selecione..</option>
        <option class="form-control" value="1">1</option>
        <option class="form-control" value="2">2</option>
        <option class="form-control" value="3">3</option>
        <option class="form-control" value="4">4</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="name">N° Cedula</label>
      <input type="text" class="form-control" name="PKNCajero" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Direccion Domicilio</label>
      <input type="text" class="form-control" name="DireccionC" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Telefono/Celular</label>
      <input type="" class="form-control" name="TelefonoC" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Nombres</label>
      <input type="" class="form-control" name="Nombre" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Apellidos</label>
      <input type="text" class="form-control" name="Apellido" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Email</label>
      <input type="email" class="form-control" name="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="address">Fecha Nacimiento</label>
      <input type="date" class="form-control" name="FechaNacimiento" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Ciudad</label>
      <select class="form-control" name="FKIDCiudad">
        <option>Selecione..</option>
        <option class="form-control" value="1">1</option>
        <option class="form-control" value="2">2</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Estado</label>
      <select class="form-control" name="FKIDEstado">
        <option>Selecione..</option>
        <option class="form-control" value="1">1</option>
        <option class="form-control" value="2">2</option>
      </select>
    </div>

    <button type="submit" class="btn btn-default">Agregar</button>
  </form>
  <!-- inclusion de la tabla para ver a los cajeros que han sido registrados -->
		<h4>VER ENTRADAS</h4>
  <?php include "tabla.php"; ?>
<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>