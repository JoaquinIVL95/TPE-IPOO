<?php

Class Viaje{
    

    private $viajeCod;
    private $destino;
    private $maxCantP;
    private $arrayPasajeros;
    private $responsable;

    public function __construct($codigoViaje , $destino, $capacidadMax, $responsableActual )
    {
        $this->viajeCod = $codigoViaje; 
        $this->destino=$destino;
        $this->maxCantP= $capacidadMax;
        $this->responsable = array($responsableActual);  
        $this->arrayPasajeros = array();
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
        return $this->arrayPasajeros;
    }
    public function setPasajeros($aPasajeros){
        $this->arrayPasajeros=$aPasajeros;
    }

    public function getResponsable(){
        return $this->responsable;
    }
    public function setResponsable($responsable){
        $this->responsable=$responsable;
    }


    public function agregarResponsable(ResponsableV $responsableV){
        $error = false;
        $responsables = $this->getResponsable();
        
        $i = 0;
        $n = count($responsables);
        while (!$error && $i < $n) {
            $p = $responsables[$i];
            if ($p->getDniResp() == $responsableV->getDniResp()) {
                $error = true;
                // echo "error";
            }
            $i++;
        }

        if ($error == false) {
            // Solo agregar el nuevo responsable si no hay error
            $responsables[] = $responsableV;
            $this->setResponsable($responsables);
            // echo "error if";
        }
        
        return $error;
    }


    


    public function agregarPasajeros(Personas $pasajero){
        
        $error = false;
        $pasajeros = $this->getPasajeros();
        
        $i = 0;
        $n = count($pasajeros);
        while (!$error && $i < $n) {
            $p = $pasajeros[$i];
            if ($p->getDni() == $pasajero->getDni()) {
                $error = true;
            }
            $i++;
        }
    
        if (!$error) {
            $pasajeros[] = $pasajero;
            $this->setPasajeros($pasajeros);
            
        }
        return $error;
    
    }



    public function eliminarPasajero($dni) {
        $pasajeros = $this->getPasajeros();
        $eliminado = false;
        foreach ($pasajeros as $index => $pasajero) {
            if ($pasajero->getDni() == $dni) {
                unset($this->arrayPasajeros[$index]);
                $eliminado = true;
            }
        }
        return $eliminado; 
    }




    public function listaPasajeros(){
        $lista = $this->getPasajeros();
        $cadena = $this->devolverArreglos($lista);

        return $cadena;
    }




    public function devolverArreglos($arreglo){
        $cadena= "\n";
        foreach ($arreglo as $elemento){
            $cadena =  $cadena . " " .$elemento . "\n";
        }
        return $cadena;
    }



    public function __toString()
    {
        // $cadenaPasajeros= $this->devolverArreglos($this->getPasajeros());
        return "Codigo del viaje N° " .  $this->getViajeCod(). "\n". " Con destino a ".$this->getDestino(). "\n" . " La capacidad maxima de pasajeros es de ". $this->getMaxCantP() . " personas \n";
    }
}