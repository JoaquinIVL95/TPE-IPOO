<?php

Class Viaje{
    

    private $viajeCod;
    private $destino;
    private $maxCantP;
    private $colPasajeros;
    private $responsable;

    public function __construct($codigoViaje , $destino, $capacidadMax, $responsableV )
    {
        $this->viajeCod = $codigoViaje; 
        $this->destino=$destino;
        $this->maxCantP= $capacidadMax;
        $this->responsable = $responsableV;  
        $this->colPasajeros = [];
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


    public function __toString()
    {
        return
            "Codigo Viaje: " . $this->getViajeCod() . "\n" .
            "Destino: " . $this->getDestino() . "\n" .
            "Capacidad Maxima de Pasajeros: " . $this->getMaxCantP() . "\n" . "\n" .
            "Listsa de pasajeros: \n" . $this->mostrarArreglo($this->getPasajeros()). "\n" .
            "Responsable del viaje: " . $this->getResponsable(). "\n" ;
    }
}
