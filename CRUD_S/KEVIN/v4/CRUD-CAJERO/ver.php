<?php
  $mysqli = new mysqli('localhost', 'root', '', 'pvp');
?>
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
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM tipodocumento");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[PKIdTipoDocumento].'">'.$valores[TipoDocumento].'</option>';
          }
        ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>N° Cedula</label>
      <input type="text" class="form-control" name="PKNCajero" required>
    </div>
    <div class="form-group col-md-6">
      <label>Direccion Domicilio</label>
      <input type="text" class="form-control" name="DireccionC" required>
    </div>
    <div class="form-group col-md-6">
      <label>Telefono/Celular</label>
      <input type="" class="form-control" name="TelefonoC" required>
    </div>
    <div class="form-group col-md-6">
      <label>Nombres</label>
      <input type="" class="form-control" name="Nombre" required>
    </div>
    <div class="form-group col-md-6">
      <label>Apellidos</label>
      <input type="text" class="form-control" name="Apellido" required>
    </div>
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" name="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label>Fecha Nacimiento</label>
      <input type="date" class="form-control" name="FechaNacimiento" required>
    </div>
    <div class="form-group col-md-6">
      <label>Ciudad</label>
      <select class="form-control" name="FKIDCiudad">
      <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM ciudad");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[PKIDCiudad].'">'.$valores[NombreC].'</option>';
          }
        ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Estado</label>
      <select class="form-control" name="FKIDEstado">
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM estado");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[PKIDEstado].'">'.$valores[TipoEstado].'</option>';
          }
        ?>
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