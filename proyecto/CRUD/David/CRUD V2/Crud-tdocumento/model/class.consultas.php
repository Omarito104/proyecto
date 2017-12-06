<?php 

	class Consultas{

		public function insertar($idTipoDocumento,$TipoDocumento){
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "insert into tipodocumento (idTipoDocumento, TipoDocumento) values (:idTipoDocumento, :TipoDocumento)";

			$statement = $conexion->prepare($sql);
			$statement->bindParam(':idTipoDocumento', $idTipoDocumento);
			$statement->bindParam(':TipoDocumento', $TipoDocumento);
			if(!$statement){
				return "Error al crear registro";
			}else{
				 $statement->execute();
                return"Registro creado correctamente";
            }
        }

		public function cargaru(){
			$rows = null;
			$modelo = new Conexion();
			$conexion = $modelo->get_conexion();
			$sql = "select * from tipodocumento";
			$statement = $conexion->prepare($sql);
			$statement->execute();
			while ($result = $statement->fetch())
                 {
				    $rows[] = $result;
			}
			return $rows;
		}

		 public function eliminar($idTipoDocumento){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "delete from tipodocumento where idTipoDocumento = :idTipoDocumento";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':idTipoDocumento', $idTipoDocumento);
            if(!$statement){
                 return "Error al eliminar documento";
            }else{
                $statement->execute();
                 return "Documento eliminado correctamente";
            }
        }

        public function buscar($nombre){
                $rows = null;
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
                $nombre = "%".$nombre."%";

                $sql = "select * from tipodocumento where nombre like :nombre";
                $statement = $conexion->prepare($sql);
                $statement->bindParam(':nombre', $nombre);
                $statement->execute();
                while ($result = $statement->fetch()) {
                        $rows[] = $result;
                }
                 return $rows;
        }

        public function cargar($idTipoDocumento){
                $rows = null;
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
                $sql = "select * from tipodocumento where idTipoDocumento = :idTipoDocumento";
                $statement = $conexion->prepare($sql);   
                $statement->bindParam(":idTipoDocumento", $idTipoDocumento);
                $statement->execute();
                while ($result = $statement->fetch()) {
                        $rows[] = $result;
                }

                return $rows;
        }

                public function modificar($campo, $valor,
                 $idTipoDocumento){
                    $modelo = new conexion();
                    $conexion = $modelo->get_conexion();
                    $sql = "update tipodocumento set $campo = :valor where idTipoDocumento = :idTipoDocumento";
                    $statement = $conexion->prepare($sql);
                    $statement->bindParam(":valor", $valor);
                    $statement->bindParam(":idTipoDocumento", $idTipoDocumento);
                    if(!$statement){
                        return "Error al modificar el documento";
                    }else{
                        $statement->execute();
                        return "documento modificado";
                    }
                }
        }

 ?>




