<?php

	function seleccionar(){
			

		if(isset($_GET['idTipoDocumento'])){
		$consultas = new consultas();
		$idTipoDocumento = $_GET['idTipoDocumento'];
		$filas = $consultas->cargar($idTipoDocumento);
			foreach ($filas as $fila) {
				echo '
				<form action = "../controller/modificardocumento.php" method = "post">
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

		             <table>
						<tr>
							<td>idTipoDocumento</td>
							<td><input type="text" name="idTipoDocumento" value= "'.$fila['idTipoDocumento'].'"></td>
						</tr>
						<tr>
							<td>TipoDocumento</td>
							<td><input type="text" name="TipoDocumento" value= "'.$fila['TipoDocumento'].'"></td>
						</tr>


		              <tr>
		                <td>&nbsp;</td>
		                <td><input type="submit" value="Modificar"></td>
		             </tr>
		          </table>

				</form>	
			';
				
			}		
		}
	}

 ?>