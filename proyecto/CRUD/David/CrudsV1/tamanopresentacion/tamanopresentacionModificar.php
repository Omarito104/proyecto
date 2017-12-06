<?php
require_once 'TamanoPresentacion.entidad.php';
require_once 'TamanoPresentacion.modelo.php';

// Logica
$alm = new TamanoPresentacion();
$model = new TamanoPresentacionModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('IdTamanoPresentacion',              $_REQUEST['IdTamanoPresentacion']);
            $alm->__SET('DescripcionTP',          $_REQUEST['DescripcionTP']);


            $model->Actualizar($alm);
            header('Location: tamanopresentacionModificar.php');
            break;

        case 'registrar':
            $alm->__SET('IdTamanoPresentacion',              $_REQUEST['IdTamanoPresentacion']);
            $alm->__SET('DescripcionTP',          $_REQUEST['DescripcionTP']);
            
            

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['IdTamanoPresentacion']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['IdTamanoPresentacion']);
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
    <head>
        <title>Tam_presentacion</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    </head>

    <body>
    

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form align="center" action="?action=<?php echo $alm->IdTamanoPresentacion > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="IdTamanoPresentacion" value="<?php echo $alm->__GET('IdTamanoPresentacion'); ?>" />
                    

                    <table border="2" >
                       
                        <tr>
                            <th >id Tamaño Presentacion</th>
                            <td><input type="text" name="IdTamanoPresentacion" value="<?php echo $alm->__GET('IdTamanoPresentacion'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >DescripcionTP</th>
                            <td><input type="text" name="DescripcionTP" value="<?php echo $alm->__GET('DescripcionTP'); ?>"  /></td>
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
                            <th >id Tamaño resentacion</th>
                            <th >DescripcionTP</th>
                            
                            <th ></th>
                            
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('IdTamanoPresentacion'); ?></td>
                            <td><?php echo $r->__GET('DescripcionTP'); ?></td>
                            <td>
                                <a href="?action=editar&IdTamanoPresentacion=<?php echo $r->IdTamanoPresentacion; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&IdTamanoPresentacion=<?php echo $r->IdTamanoPresentacion; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
        </center>
    </body>
</html>