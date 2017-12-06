<?php

class usuario
{
    private $IdTipoProducto;
    private $DescripcionTipoProducto;


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
