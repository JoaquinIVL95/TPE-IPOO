<?php

Class Pasajero extends Persona {

    private $dniPasajero;
    private $telPasajero;

    public function __construct($nombrePasajero, $apeliidoPasajero  ,$dniPasajero , $telPasajero){
        parent::__construct($nombrePasajero, $apeliidoPasajero);
        $this->dniPasajero = $dniPasajero;
        $this->telPasajero = $telPasajero;
    }


    public function getDniPasajero(){
        return $this->dniPasajero;
    }
    public function setDniPasajero($dniPasajero){
        $this->dniPasajero = $dniPasajero;
    }

    public function getTelPasajero(){
        return $this->telPasajero;
    }
    public function setTelPasajero($telPasajero){
        $this->telPasajero = $telPasajero;
    }

    public function __toString()
    {
        return
        "Pasajero " . parent::__toString() . "\n" .
        "DNI: ". $this->getDniPasajero() . "\n" .
        "Telefono del pasajero: " . $this->getTelPasajero() . "\n" ;
    }
}