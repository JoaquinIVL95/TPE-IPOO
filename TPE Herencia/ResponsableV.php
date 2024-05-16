<?php

Class ResponsableV extends Persona {

    private $numEmpleado;
    private $numLicencia;

    public function __construct($nombreResp, $apellidoResp, $numEmpleado, $numLicencia )
    {
        parent::__construct($nombreResp, $apellidoResp);
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
    }

    public function getNumEmpleado(){
        return $this->numEmpleado;
    }
    public function setNumEmpleado($numEmpleado){
        $this->numEmpleado = $numEmpleado;
    }

    public function getNumLicencia(){
        return $this->numLicencia;
    }
    public function setNumLicencia($numLicencia){
        $this->numLicencia = $numLicencia;
    }

    public function __toString()
    {
        return
            "\n". parent::__toString() . "\n" .
            "Número de empleado: " . $this->getNumEmpleado() . "\n" .
            "Numero de Licencia: " . $this->getNumLicencia() . "\n" ;
    }
}