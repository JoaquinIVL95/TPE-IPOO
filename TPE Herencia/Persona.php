<?php

Class Persona {

    private $nombre;
    private $apellido;
    
    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombreNuevo){
        $this->nombre=$nombreNuevo;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellidoNuevo){
        $this->apellido=$apellidoNuevo;
    }


    


    public function __toString()
    {
        return
            "Nombre: " . $this->getNombre() . "\n" .
            "Apellido: " . $this->getApellido() ;
    }
}