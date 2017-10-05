
<html>
	<head>
		<title>.: CRUD :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "navbar.php"; ?>
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
<form role="form" method="post" action="crear.php">
  <div class="form-group">
    <label for="desc_producto">Descripcion del producto</label>
    <input type="text" class="form-control" name="desc_producto" required>
  </div>
  <div class="form-group">
    <label for="cant_producto">Cantidad del producto</label>
    <input type="text" class="form-control" name="cant_producto" required>
  </div>
  <div class="form-group">
    <label for="precio_unitario">Precio unitario</label>
    <input type="text" class="form-control" name="precio_unitario" required>
  </div>
  <div class="form-group">
    <label for="val_total_producto">Valor total del producto</label>
    <input type="email" class="form-control" name="val_total_producto" >
  </div>
  <div class="form-group">
    <label for="subt_producto">Subtotal del producto</label>
    <input type="text" class="form-control" name="subt_producto" >
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>