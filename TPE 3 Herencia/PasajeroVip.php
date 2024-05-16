<?php

class PasajeroVip extends Pasajero {

    private $numViajeroFrecuente;
    private $millasAcumuladas;

    public function __construct($numViajeroFrecuente, $millasAcumuladas, $nombre, $numAsiento, $ticket)
    {
        parent::__construct($nombre, $numAsiento, $ticket);
        $this->numViajeroFrecuente = $numViajeroFrecuente;
        $this->millasAcumuladas = $millasAcumuladas;
    }

    
    public function getNumViajeroFrecuente()
    {
        return $this->numViajeroFrecuente;
    }
    public function setNumViajeroFrecuente($numViajeroFrecuente)
    {
        $this->numViajeroFrecuente = $numViajeroFrecuente;
    }


    public function getMillasAcumuladas()
    {
        return $this->millasAcumuladas;
    }
    public function setMillasAcumuladas($millasAcumuladas)
    {
        $this->millasAcumuladas = $millasAcumuladas;
    }

    public function darPorcentajeIncremento(){
        
        $porcentajeIncremento = 35 ;
        $millasAcumuladas = $this->getMillasAcumuladas();

        if($millasAcumuladas >= 300){
            $porcentajeIncremento = 30;
        }
        return $porcentajeIncremento;
    }

    public function __toString()
    {
        return 
    parent::__toString() . "\n" .
    "Numero de viajero frecuente: " . $this->numViajeroFrecuente . "\n" .
    "Millas acumuladas: " . $this->millasAcumuladas . "\n";
    }
}