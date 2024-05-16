<?php

Class PasajeroConNecesidadesEspeciales extends Pasajero{

    private $requiereAsistenciaEsp;

    public function __construct($requiereAsistenciaEsp, $nombre, $numAsiento, $ticket)
    {
        parent::__construct($nombre, $numAsiento, $ticket);
        $this->requiereAsistenciaEsp = $requiereAsistenciaEsp;
    }
    

    
    public function getRequiereAsistenciaEsp()
    {
        return $this->requiereAsistenciaEsp;
    }
    public function setRequiereAsistenciaEsp($requiereAsistenciaEsp)
    {
        $this->requiereAsistenciaEsp = $requiereAsistenciaEsp;
    }


    public function darPorcentajeIncremento(){
        $requiereAsistenciaEsp = $this->getRequiereAsistenciaEsp();
        if($requiereAsistenciaEsp == true){
            $porcentajeIncremento = 30;

        }
        return $porcentajeIncremento;
    }


    public function __toString()
    {
        return 
        parent::__toString(). "\n" . 
        "Requiere Asistencia Especial: " . $this->getRequiereAsistenciaEsp() . "\n";
    }
}