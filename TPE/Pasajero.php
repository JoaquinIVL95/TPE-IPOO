<?php

Class Pasajero extends Personas {


    
    private $numAsiento;
    private $ticket;

    public function __construct($nombre, $apellido, $dni ,$telefono, $numAsiento, $ticket)
    {
        parent::__construct($nombre, $apellido,$dni ,$telefono);
        $this->numAsiento = $numAsiento;
        $this->ticket = $ticket;
    }

  
    public function getNumAsiento()
    {
        return $this->numAsiento;
    }
    public function setNumAsiento($numAsiento)
    {
        $this->numAsiento = $numAsiento;
    }

    public function getTicket()
    {
        return $this->ticket;
    } 
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
    }

    public function darPorcentajeIncremento(){
        
        $porcentajeIncremento = 10;
        return $porcentajeIncremento / 100;
    }





    public function __toString()
    {
        return "Pasajero: " . parent::__toString() . "\n" .
        "Numero de asiento: " . $this->numAsiento . "\n" .
        "Ticket: " . $this->ticket . "\n";
    }
}