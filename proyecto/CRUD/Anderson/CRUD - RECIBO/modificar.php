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
            $alm->__SET('idRecibio',              $_REQUEST['idRecibio']);
            $alm->__SET('FechaRecibo',          $_REQUEST['FechaRecibo']);
            $alm->__SET('TotalRecibo',        $_REQUEST['TotalRecibo']);
            $alm->__SET('Usuario_PKNUsuario',            $_REQUEST['Usuario_PKNUsuario']);
            $alm->__SET('Usuario_TipoDocumento_idTipoDocumento', $_REQUEST['Usuario_TipoDocumento_idTipoDocumento']);

            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('idRecibio',              $_REQUEST['idRecibio']);
            $alm->__SET('FechaRecibo',          $_REQUEST['FechaRecibo']);
            $alm->__SET('TotalRecibo',        $_REQUEST['TotalRecibo']);
            $alm->__SET('Usuario_PKNUsuario',            $_REQUEST['Usuario_PKNUsuario']);
            $alm->__SET('Usuario_TipoDocumento_idTipoDocumento', $_REQUEST['Usuario_TipoDocumento_idTipoDocumento']);

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idRecibio']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['idRecibio']);
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
                
                <form action="?action=<?php echo $alm->idRecibio > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="idRecibio" value="<?php echo $alm->__GET('idRecibio'); ?>" />
                    
                    <table >
                        <tr>
                            <th >RECIBO</th>
                            <td><input type="text" name="idRecibio" value="<?php echo $alm->__GET('idRecibio'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >FECHA DEL RECIBO</th>
                            <td><input type="text" name="FechaRecibo" value="<?php echo $alm->__GET('FechaRecibo'); ?>"  /></td>
                        </tr>

                        <tr>
                            <th >TOTAL</th>
                            <td><input type="text" name="TotalRecibo" value="<?php echo $alm->__GET('TotalRecibo'); ?>"  /></td>
                        </tr>
                                                <tr>
                            <th >USUARIO</th>
                            <td><input type="text" name="Usuario_PKNUsuario" value="<?php echo $alm->__GET('Usuario_PKNUsuario'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >TIPO DE DOCUMENTO</th>
                            <td><input type="text" name="Usuario_TipoDocumento_idTipoDocumento" value="<?php echo $alm->__GET('Usuario_TipoDocumento_idTipoDocumento'); ?>"  /></td>
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
                            <th >RECIBO</th>
                            <th >FECHA DEL RECIBO</th>
                            <th >TOTAL</th>
                            <th >USUARIO</th>
                            <th >TIPO DE DOCUMENTO</th>
                            <th ></th>
                            
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('idRecibio'); ?></td>
                            <td><?php echo $r->__GET('FechaRecibo'); ?></td>
                            <td><?php echo $r->__GET('TotalRecibo'); ?></td>
                            <td><?php echo $r->__GET('Usuario_PKNUsuario'); ?></td>
                            <td><?php echo $r->__GET('Usuario_TipoDocumento_idTipoDocumento'); ?></td>
                            <td>
                                <a href="?action=editar&idRecibio=<?php echo $r->idRecibio; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&idRecibio=<?php echo $r->idRecibio; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
