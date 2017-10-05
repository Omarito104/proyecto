
<html>
	<head>
		<title> CRUD </title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER ENTRADAS</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
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
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>