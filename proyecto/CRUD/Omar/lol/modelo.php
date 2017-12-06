<?php

class conteo_visitasModelo
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

            $stm = $this->pdo->prepare("SELECT * FROM conteo_visitas");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new conteo_visitas();

                $alm->__SET('IdConteoVisitas', $r->IdConteoVisitas);
                $alm->__SET('Visitas', $r->Visitas);
				$alm->__SET('Usuario_PKNUsuario', $r->Usuario_PKNUsuario);
				$alm->__SET('Usuario_TipoDocumento_idTipoDocumento', $r->Usuario_TipoDocumento_idTipoDocumento);
                $alm->__SET('ubicacion_img', $r->ubicacion_img);
               
                $result[] = $alm;
            }


            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($IdConteoVisitas)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM conteo_visitas WHERE IdConteoVisitas = ?");
                      

            $stm->execute(array($IdConteoVisitas));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new conteo_visitas();

                $alm->__SET('IdConteoVisitas', $r->IdConteoVisitas);
                $alm->__SET('Visitas', $r->Visitas);
                $alm->__SET('Usuario_PKNUsuario', $r->Usuario_PKNUsuario);
				$alm->__SET('Usuario_TipoDocumento_idTipoDocumento', $r->Usuario_TipoDocumento_idTipoDocumento);
                $alm->__SET('ubicacion_img', $r->ubicacion_img);


            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($IdConteoVisitas)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM conteo_visitas WHERE IdConteoVisitas = ?");                      

            $stm->execute(array($IdConteoVisitas));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(conteo_visitas $data)
    {
        try 
        {
            $sql = "UPDATE conteo_visitas SET  
                        Visitas 								= ?,
                        Usuario_PKNUsuario						= ?,
						Usuario_TipoDocumento_idTipoDocumento	= ?,
						ubicacion_img 							= ?

                    WHERE IdConteoVisitas = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(    
                    $data->__GET('IdConteoVisitas'), 
                    $data->__GET('Visitas'),
                    $data->__GET('Usuario_PKNUsuario'),
					$data->__GET('Usuario_TipoDocumento_idTipoDocumento'),
                    $data->__GET('ubicacion_img')

                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(conteo_visitas $data)
    {
        try 
        {
        $sql = "INSERT INTO conteo_visitas (IdConteoVisitas, Visitas, Usuario_PKNUsuario, Usuario_TipoDocumento_idTipoDocumento, ubicacion_img)
                VALUES (?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('IdConteoVisitas'), 
				$data->__GET('Visitas'), 
                $data->__GET('Usuario_PKNUsuario'),
				$data->__GET('Usuario_TipoDocumento_idTipoDocumento'), 
                $data->__GET('ubicacion_img')
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>