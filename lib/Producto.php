<?php

class Producto{
    var $nombre = '';
    var $precio = 0;
    var $codigo = "";
    
    /*
    public function __construct()
    {
        
    }
*/
    public function __construct($nombre="",$precio=0,$codigo="")
    {
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->codigo=$codigo;
    }
    
    
}

?>