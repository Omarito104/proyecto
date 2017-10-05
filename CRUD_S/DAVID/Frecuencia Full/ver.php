<!DOCTYPE html>
<html>
<?php include "conexion.php"; ?>
	<head>
		<title> CRUD FRECUENCIA </title>
    <!-- Enlace de boostrap y js -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
    <meta charset="utf-8">
	</head>
	<body>
  <!-- formulario  para guardar datos de la frecuencia  -->
  <h4>Agregar frecuencia</h4>
  <form role="form" method="post" action="agregar.php">
    <div class="form-group col-md-6">
      <label for="name">Frecuencia</label>
      <input type="text" class="form-control" name="PKIDFrecuencia" required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">FechaPrimerCompra</label>
      <input type="date" class="form-control" name="FechaPrimerCompra" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">FechaCompra</label>
      <input type="date" class="form-control" name="FechaCompra" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Fecha Limite</label>
      <input type="date" class="form-control" name="FechaLimite" required>
    </div>
    <div class="form-group col-md-6">
      <label for=""> Hora Compra</label>
      <input type="time" class="form-control" name="HoraCompra" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Frecuencia De Compra</label>
      <input type="text" class="form-control" name="FrecuenciaDeCompra" required>
    </div>

    <button type="submit" class="btn btn-default">Agregar</button>
  </form>
  <!-- inclusion de la tabla para ver las frecuencias que han sido registrados -->
		<h4>VER ENTRADAS</h4>
  <?php include "tabla.php"; ?>
<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>