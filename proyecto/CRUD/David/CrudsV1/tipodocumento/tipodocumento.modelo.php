<?php

class tipodocumentoModelo
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

            $stm = $this->pdo->prepare("SELECT * FROM tipodocumento");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new tipodocumento();

                $alm->__SET('idTipoDocumento', $r->idTipoDocumento);
                $alm->__SET('TipoDocumento', $r->TipoDocumento);

               
                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($idTipoDocumento)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM tipodocumento WHERE idTipoDocumento = ?");
                      

            $stm->execute(array($idTipoDocumento));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new tipodocumento();

                $alm->__SET('idTipoDocumento', $r->idTipoDocumento);
                $alm->__SET('TipoDocumento', $r->TipoDocumento);


            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($idTipoDocumento)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM tipodocumento WHERE idTipoDocumento = ?");                      

            $stm->execute(array($idTipoDocumento));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(tipodocumento $data)
    {
        try 
        {
            $sql = "UPDATE tipodocumento SET 
                        
                        TipoDocumento           = ?
  
                        
                    WHERE idTipoDocumento = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    
                    $data->__GET('TipoDocumento'), 

                    $data->__GET('idTipoDocumento')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(tipodocumento $data)
    {
        try 
        {
        $sql = "INSERT INTO tipodocumento (idTipoDocumento, TipoDocumento)
                VALUES (?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('idTipoDocumento'), 
				$data->__GET('TipoDocumento'), 

                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>