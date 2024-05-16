<?php

Class Viaje{
    

    private $viajeCod;
    private $destino;
    private $maxCantP;
    private $colPasajeros;
    private $responsable;
    private $costoViaje;
    private $montoTotalAbonado;

    public function __construct($codigoViaje , $destino, $capacidadMax, $responsableV, $colPasajeros, $costoViaje , $montoTotalAbonado )
    {
        $this->viajeCod = $codigoViaje; 
        $this->destino=$destino;
        $this->maxCantP= $capacidadMax;
        $this->responsable = $responsableV;  
        $this->colPasajeros = $colPasajeros;
        $this->costoViaje = $costoViaje;
        $this->montoTotalAbonado = $montoTotalAbonado;
    }

    public function getViajeCod(){
        return $this->viajeCod;
    }
    public function setViajeCod($codigoViaje){
        $this->viajeCod = $codigoViaje;
    }

    public function getDestino(){
        return $this->destino;
    }
    public function setDestino($destino){
        $this->destino = $destino;
    }

    public function getMaxCantP(){
        return $this->maxCantP;
    }
    public function setMaxCantP($capacidadMax){
        $this->maxCantP=$capacidadMax;
    }

    public function getPasajeros(){
        return $this->colPasajeros;
    }
    public function setPasajeros($aPasajeros){
        $this->colPasajeros=$aPasajeros;
    }

    public function getResponsable(){
        return $this->responsable;
    }
    public function setResponsable($responsable){
        $this->responsable=$responsable;
    }

    public function getCostoViaje(){
        return $this->costoViaje;
    }
    public function setCostoViaje($costoViaje){
        $this->costoViaje = $costoViaje;
    }

    public function getMontoTotalAbonado(){
        return $this->montoTotalAbonado;
    }
    public function setMontoTotalAbonado($montoTotalAbonado){
        $this->montoTotalAbonado = $montoTotalAbonado;
    }

    public function mostrarArreglo($arreglo){
        $cadena = "";
        foreach ($arreglo as $elemento){
            $cadena .= $elemento ;
        }
        return $cadena;

    }

    public function agregarPasajero($nombre, $apellido , $dni, $telefono){
        $colPasajeros = $this->getPasajeros();
        $nPasajeros = count($colPasajeros);
        $i = 0;
        $encontrado = false;

        while($encontrado != true && $i < $nPasajeros){
            
            $dniPasajeros = $colPasajeros[$i];
            if($dni == $dniPasajeros->getDniPasajero()){
                $encontrado = true;
                echo "if dni encontrado 01";
            }else{
                $i++;
                echo "if dni no encontrado 02 ";

            }
            
        
        }
        
        if($encontrado == false){
            $objPasajero = new Pasajero($nombre , $apellido, $dni , $telefono);
            $colPasajeros[] = $objPasajero;
            $this->setPasajeros($colPasajeros);
            echo "obj creado 1 ";
            
        }else{
            echo "nada";
        }
        
    }


    public function venderPasaje($objPasajero){
        $colPasajeros = $this->getPasajeros();
        $pasajeDisponible = $this->hayPasajesDisponibles();

        
    }
    
    public function hayPasajesDisponibles(){

        $maxCantP = $this->getMaxCantP();
        $colPasajeros = $this->getPasajeros();
        $cantP = count($colPasajeros);
        $pasajeDisponible = false;

        if($cantP < $maxCantP){
            $pasajeDisponible = true;
        }

        return $pasajeDisponible;
    }

    public function __toString()
    {
        return
            "Codigo Viaje: " . $this->getViajeCod() . "\n" .
            "Destino: " . $this->getDestino() . "\n" .
            "Capacidad Maxima de Pasajeros: " . $this->getMaxCantP() . "\n" . "\n" .
            "Listsa de pasajeros: \n" . $this->mostrarArreglo($this->getPasajeros()). "\n" .
            "Responsable del viaje: " . $this->getResponsable(). "\n" . 
            "Costo del viaje: " . $this->getCostoViaje() . "\n";
    }
}
