<?php
require_once 'usuario.entidad.php';
require_once 'usuario.modelo.php';

// Logica
$alm = new usuario();
$model = new usuarioModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('IdTipoProducto',              $_REQUEST['IdTipoProducto']);
            $alm->__SET('DescripcionTipoProducto',     $_REQUEST['DescripcionTipoProducto']);

            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('IdTipoProducto',       $_REQUEST['IdTipoProducto']);
            $alm->__SET('DescripcionTipoProducto',       $_REQUEST['DescripcionTipoProducto']);

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['IdTipoProducto']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['IdTipoProducto']);
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
    <body >

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->IdTipoProducto > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="IdTipoProducto" value="<?php echo $alm->__GET('IdTipoProducto'); ?>" />
                    
                    <table>
                        <tr>
                            <th >ID PRODUCTO</th>
                            <td><input type="text" name="IdTipoProducto" value="<?php echo $alm->__GET('IdTipoProducto'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >DESCRICION DEL PRODUCTO</th>
                            <td><input type="text" name="DescripcionTipoProducto" value="<?php echo $alm->__GET('DescripcionTipoProducto'); ?>"  /></td>
                        </tr>

                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >ID PRODUCTO</th>
                            <th >DESCRICION PRODUCTO</th>
                            <th ></th>
                            
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('IdTipoProducto'); ?></td>
                            <td><?php echo $r->__GET('DescripcionTipoProducto'); ?></td>
                            <td>
                                <a href="?action=editar&IdTipoProducto=<?php echo $r->IdTipoProducto; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&IdTipoProducto=<?php echo $r->IdTipoProducto; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
