<?php

Class Pasajero {


    private $nombre;
    private $numAsiento;
    private $ticket;

    public function __construct($nombre, $numAsiento, $ticket)
    {
        $this->nombre = $nombre;
        $this->numAsiento = $numAsiento;
        $this->ticket = $ticket;
    }

    

    
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
        return $porcentajeIncremento;
    }





    public function __toString()
    {
        return "Nombre del Pasajero: " . $this->nombre . "\n" .
        "Numero de asiento: " . $this->numAsiento . "\n" .
        "Ticket: " . $this->ticket . "\n";
    }
}