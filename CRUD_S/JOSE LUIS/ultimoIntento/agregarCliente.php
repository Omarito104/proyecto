<html>
<head>
<title>Actualizar datos</title>
<meta charset= "utf-8">
</head>
<body>

<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "pvp";

$conexion = mysqli_connect( $server, $usuario, $contraseña, $bd)
  or die("error en la conexion");
  $PKNIdentificacion = $_POST['PKNIdentificacion'];
  $Direccion = $_POST['Direccion'];
  $Telefono = $_POST['Telefono'];
  $NombreCli =($_POST['NombreCli']);
  $Apellido = $_POST['Apellido'];
  $Email = $_POST['Email'];

   $FKIDRecibo = $_POST['FKIDRecibo'];
  $FKIDMenu =($_POST['FKIDMenu']);
  $FKIDTipoDocumento = $_POST['FKIDTipoDocumento'];
  $FKIDCiudad = $_POST['FKIDCiudad'];
   $FKIDEmail = $_POST['FKIDEmail'];
  $FKIDFrecuencia =($_POST['FKIDFrecuencia']);
  $FKIDDescuento = $_POST['FKIDDescuento'];
  $FKIDCajero = $_POST['FKIDCajero'];
  

  $insertar = "INSERT INTO cliente VALUES ( '$PKNIdentificacion' , '$Direccion' , '$Telefono', '$NombreCli' , '$Apellido', '$Email', '$FKIDRecibo', '$FKIDMenu', '$FKIDTipoDocumento', '$FKIDCiudad', '$FKIDEmail', '$FKIDFrecuencia', '$FKIDDescuento', '$FKIDCajero')";

  $resultado = mysqli_query($conexion, $insertar)
    or die ("Error al insertar Datos");

  mysqli_close($conexion);
  echo "Datos insertados correctamente";

?>

</br></br><form name="f_actualizar_CLIENTE" method= "POST" action="verCliente.php">

   <input type="submit" value="VOLVER ATRAS" name="actualizar"></form>
 
 <form name="f_actualizar_alumno" method= "POST" action="inicio menu.html">
    <input type="submit" value="VOLVER AL INCIO" name="actualizar"></form>
 </form>

 </body>
</html>
