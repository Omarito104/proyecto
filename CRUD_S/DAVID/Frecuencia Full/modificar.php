<!DOCTYPE html>
<html>
<head>
  <title>formulario de registro</title>
</head>
<body>
    <center>
          <?php

            $ID_Frecuencia=$_REQUEST['ID_Frecuencia'];

              include("conexion.php");

              $query="SELECT * FROM Frecuencia WHERE ID_Frecuencia='ID_Frecuencia'";
              $resultado=$conexion->query($query);
              $row=$resultado->fetch_assoc();
              ?>

    <form action="modificar_proceso.php?ID_Frecuencia=<?php echo $row['ID_Frecuencia']; ?>" method="POST">



            ID_Frecuencia <input type="text" name="ID_Frecuencia" value="<?php echo $row['ID_Frecuencia']; ?>" /><br/><br/>
            Fecha_de_primer_compra <input type="text" name="Fecha_de_primer_compra" value="<?php echo $row['Fecha_de_primer_compra']; ?>" /><br/><br/>
            Fecha_comprao <input type="text" name="Fecha_compra" value="<?php echo $row['Fecha_compra']; ?>" /><br/><br/>
            Fecha_limiea <input type="text" name="Fecha_limie" value="<?php echo $row['Fecha_limie']; ?>" /><br/><br/>
            Hora_compra <input type="text" name="Hora_compra" value="<?php echo $row['Hora_compra']; ?>" /><br/><br/>
            Frecuencias_de_compra <input type="text" name="Frecuencias_de_compra" value="<?php echo $row['Frecuencias_de_compra']; ?>" /><br/><br/>
            <input type="submit" value="aceptar" />
    </form>
</center>
</body>
</html>