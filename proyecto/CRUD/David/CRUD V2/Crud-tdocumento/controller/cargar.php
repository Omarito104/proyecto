<?php 

	function cargar(){
	    $consultas = new Consultas();
	    $filas = $consultas->cargaru();

	    echo"<table>
			<tr>
				<th>idTipoDocumento</th>
				<th>TipoDocumento</th>
			</tr>";

		foreach ($filas as $fila) {
			echo "<tr>";
			echo "<td>".$fila['idTipoDocumento']."</td>";
			echo "<td>".$fila['TipoDocumento']."</td>";

			echo "<td><a href='../controller/eliminar.php?idTipoDocumento=".$fila['idTipoDocumento']."'>Eliminar</td>";
			echo "<td><a href='../vista/modificar.php?idTipoDocumento=".$fila['idTipoDocumento']."'>Modificar</td>";
			echo "</tr>";
   		}	

	    echo"</table>";

	}

function buscar($nombre){
		 $consultas = new Consultas();
		 $filas = $consultas->buscar($nombre);
		    echo"<table>
				<tr>
					<th>idTipoDocumento</th>
		    		<th>TipoDocumento</th>
		    	</tr>";	

				if(isset($filas)){ 
			    	foreach ($filas as $fila) {
			    		echo "<tr>";
			    		echo "<td>".$fila['idTipoDocumento']."</td>";
			    		echo "<td>".$fila['TipoDocumento']."</td>";
			    		echo "<td><a href='../controller/eliminar.php?idTipoDocumento=".$fila['idTipoDocumento']."'>Eliminar</td>";
			    		echo "<td><a href='../Vista/modificar.php?idTipoDocumento=".$fila['idTipoDocumento']."'>Modificar</td>";
			    		echo "</tr>";
		    	}
		    }	

		    echo"</table>";
		}

?>