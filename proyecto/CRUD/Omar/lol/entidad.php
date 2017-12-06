<?php

class conteo_visitas
{
    private $IdConteoVisitas;
    private $Visitas;
    Private $Usuario_PKNUsuario;
	private $Usuario_TipoDocumento_idTipoDocumento;
	private $ubicacion_img;


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>