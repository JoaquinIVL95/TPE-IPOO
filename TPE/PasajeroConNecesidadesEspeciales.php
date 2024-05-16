<?php

Class PasajeroConNecesidadesEspeciales extends Pasajero{

    
    private $sillaR;
    private $asistencia;
    private $comidaEspecial;

    public function __construct($nombre,$apellido, $dni, $telefono, $numAsiento, $ticket, $sillaR, $asistencia, $comidaEspecial)
    {
        parent::__construct( $nombre, $apellido , $dni, $telefono, $numAsiento, $ticket);
        $this->sillaR = $sillaR;
        $this->asistencia = $asistencia;
        $this->comidaEspecial = $comidaEspecial;
    }
    

    
    public function getSillaR()
    {
        return $this->sillaR;
    }
    public function setSillaR($sillaR)
    {
        $this->sillaR = $sillaR;
    }

    public function getAsistencia()
    {
        return $this->asistencia;
    }
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;
    }

    public function getComidaEspecial()
    {
        return $this->comidaEspecial;
    }
    public function setComidaEspecial($comidaEspecial)
    {
        $this->comidaEspecial = $comidaEspecial;
    }


    public function darPorcentajeIncremento(){
        if($this->getSillaR() && $this->getAsistencia() && $this->getComidaEspecial() ){
            $porcentaje = 30;
        }else{
            $porcentaje = 15;
        }
        return $porcentaje / 100;
    }


    public function __toString()
    {
        return 
        parent::__toString(). "\n" . 
        "Requiere Asistencia Especial: " . $this->getSillaR() . "\n";
    }
}