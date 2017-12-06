<?php

class usuario
{
    private $idRecibio;
    private $FechaRecibo;
    private $TotalRecibo;
    private $Usuario_PKNUsuario;
    private $Usuario_TipoDocumento_idTipoDocumento;



    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
