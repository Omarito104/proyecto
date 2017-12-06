<?php
require_once 'tipodocumento.entidad.php';
require_once 'tipodocumento.modelo.php';

// Logica
$alm = new tipodocumento();
$model = new tipodocumentoModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('idTipoDocumento',              $_REQUEST['idTipoDocumento']);
            $alm->__SET('TipoDocumento',          $_REQUEST['TipoDocumento']);


            $model->Actualizar($alm);
            header('Location: tipodocumentoModificar.php');
            break;

        case 'registrar':
            $alm->__SET('idTipoDocumento',              $_REQUEST['idTipoDocumento']);
            $alm->__SET('TipoDocumento',          $_REQUEST['TipoDocumento']);
            
            

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idTipoDocumento']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['idTipoDocumento']);
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
    <body  bgcolor="5EDFD0">

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->idTipoDocumento > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="idTipoDocumento" value="<?php echo $alm->__GET('idTipoDocumento'); ?>" />
                    
                    <table >
                        <tr>
                            <th >id Tipo Documento</th>
                            <td><input type="text" name="idTipoDocumento" value="<?php echo $alm->__GET('idTipoDocumento'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Tipo Documento</th>
                            <td><input type="text" name="TipoDocumento" value="<?php echo $alm->__GET('TipoDocumento'); ?>"  /></td>
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
                            <th >id Tipo Documento</th>
                            <th >Tipo Documento</th>
                            
                            <th ></th>
                            
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('idTipoDocumento'); ?></td>
                            <td><?php echo $r->__GET('TipoDocumento'); ?></td>
                            <td>
                                <a href="?action=editar&idTipoDocumento=<?php echo $r->idTipoDocumento; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&idTipoDocumento=<?php echo $r->idTipoDocumento; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>