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
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group col-md-6">
      <label for="">Tipo Documento</label>
      <select>
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
      <label for="email">Estado</label>
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

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>