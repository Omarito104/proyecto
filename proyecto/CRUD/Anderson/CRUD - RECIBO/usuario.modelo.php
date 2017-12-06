<?php

class usuarioModelo
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=pvpv_final', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM recibio");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new usuario();

                $alm->__SET('idRecibio', $r->idRecibio);
                $alm->__SET('FechaRecibo', $r->FechaRecibo);
                $alm->__SET('TotalRecibo', $r->TotalRecibo);
                $alm->__SET('Usuario_PKNUsuario', $r->Usuario_PKNUsuario);
                $alm->__SET('Usuario_TipoDocumento_idTipoDocumento', $r->Usuario_TipoDocumento_idTipoDocumento);



                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($idRecibio)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM recibio WHERE idRecibio = ?");
                      

            $stm->execute(array($idRecibio));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new usuario();

                $alm->__SET('idRecibio', $r->idRecibio);
                $alm->__SET('FechaRecibo', $r->FechaRecibo);
                $alm->__SET('TotalRecibo', $r->TotalRecibo);
                $alm->__SET('Usuario_PKNUsuario', $r->Usuario_PKNUsuario);
                $alm->__SET('Usuario_TipoDocumento_idTipoDocumento', $r->Usuario_TipoDocumento_idTipoDocumento);


            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($idRecibio)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM recibio WHERE idRecibio = ?");                      

            $stm->execute(array($idRecibio));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(usuario $data)
    {
        try 
        {
            $sql = "UPDATE recibio SET 
                        
                        FechaRecibo         = ?,
                        TotalRecibo         = ?,
                        Usuario_PKNUsuario   = ?,
                        Usuario_TipoDocumento_idTipoDocumento    = ?
                        
                    WHERE idRecibio = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    
                    $data->__GET('FechaRecibo'),
                    $data->__GET('TotalRecibo'),
                    $data->__GET('Usuario_PKNUsuario'),
                    $data->__GET('Usuario_TipoDocumento_idTipoDocumento'),
                    $data->__GET('idRecibio')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(usuario $data)
    {
        try 
        {
        $sql = "INSERT INTO recibio (idRecibio,FechaRecibo,TotalRecibo,Usuario_PKNUsuario,Usuario_TipoDocumento_idTipoDocumento) 
                VALUES (?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('idRecibio'),
                $data->__GET('FechaRecibo'),
                $data->__GET('TotalRecibo'),
                $data->__GET('Usuario_PKNUsuario'),
                $data->__GET('Usuario_TipoDocumento_idTipoDocumento'),
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>
