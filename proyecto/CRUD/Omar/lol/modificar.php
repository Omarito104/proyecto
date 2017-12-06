<?php
require_once 'entidad.php';
require_once 'modelo.php';

// Logica
$alm = new conteo_visitas();
$model = new conteo_visitasModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('IdConteoVisitas', 										$_REQUEST['IdConteoVisitas']);
            $alm->__SET('Visitas',   											$_REQUEST['Visitas']);
            $alm->__SET('Usuario_PKNUsuario',       							$_REQUEST['Usuario_PKNUsuario']);
			$alm->__SET('Usuario_TipoDocumento_idTipoDocumento',       			$_REQUEST['Usuario_TipoDocumento_idTipoDocumento']);
			$alm->__SET('ubicacion_img',       									$_REQUEST['ubicacion_img']);

            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('IdConteoVisitas', 										$_REQUEST['IdConteoVisitas']);
            $alm->__SET('Visitas',   											$_REQUEST['Visitas']);
            $alm->__SET('Usuario_PKNUsuario',       							$_REQUEST['Usuario_PKNUsuario']);
			$alm->__SET('Usuario_TipoDocumento_idTipoDocumento',				$_REQUEST['Usuario_TipoDocumento_idTipoDocumento']);
            $alm->__SET('ubicacion_img',       									$_REQUEST['ubicacion_img']);

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['IdConteoVisitas']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['IdConteoVisitas']);
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Anexsoft</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    </head>
    <body  bgcolor="">

        <div class="pure-g">
            <div class="pure-u-1-12">

                
                <form action="?action=<?php echo $alm->IdConteoVisitas > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >

                    <input type="hidden" name="IdConteoVisitas" value="<?php echo $alm->__GET('IdConteoVisitas'); ?>" />
                    
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><input type="text" name="IdConteoVisitas" value="<?php echo $alm->__GET('IdConteoVisitas'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Visitas</th>
                            <td><input type="text" name="Visitas" value="<?php echo $alm->__GET('Visitas'); ?>"  /></td>
                        </tr>

                        <tr>
                            <th>Identificacion</th>
                            <td><input type="text" name="Usuario_PKNUsuario" value="<?php echo $alm->__GET('Usuario_PKNUsuario'); ?>"  /></td>
                        </tr>
						<tr>
                            <th>Tipo de Documento</th>
                            <td><input type="text" name="Usuario_TipoDocumento_idTipoDocumento" value="<?php echo $alm->__GET('Usuario_TipoDocumento_idTipoDocumento'); ?>"  /></td>
                        </tr>
						<tr>
                            <th>Directorio de la imagen</th>
                            <td><input type="text" name="ubicacion_img" value="<?php echo $alm->__GET('ubicacion_img'); ?>"  /></td>
                        </tr>

                        
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>

                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >Visitas</th>
							<th >Identificacion</th>
							<th >Tipo de Documento</th>
                            <th >Ubicacion</th>
                            <th >Imagen</th>
                            <th >Estado</th>


                          
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('IdConteoVisitas'); ?></td>
                            <td><?php echo $r->__GET('Visitas'); ?></td>
							<td><?php echo $r->__GET('Usuario_PKNUsuario'); ?></td>
							<td><?php echo $r->__GET('Usuario_TipoDocumento_idTipoDocumento'); ?></td>


                            <td><?php echo $r->__GET('ubicacion_img');$z=$r->__GET('ubicacion_img'); ?></td>
                            
                            <td><?php echo "<img src='$z' width='150' height='150' alt='Guardado' border='0'>"; ?></td>

                            
        
                            
                
                            
                         

                            <td><img src='' width='150' height='150' alt='Guardado' border='0'></td>  
                            <td>

                                <a href="?action=editar&IdConteoVisitas=<?php echo $r->IdConteoVisitas; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&IdConteoVisitas=<?php echo $r->IdConteoVisitas; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>