<?php


include 'Persona.php';
include 'Pasajero.php';
include 'ResponsableV.php';
include 'Viaje.php';

// $objPasajero1 = new Pasajero("Jorge", "Perez", "38892401", "2996069039");
// $objPasajero2 = new Pasajero("Raul", "Gonzales", "394034201", "2995054783");
// $colPasajeros = [$objPasajero1, $objPasajero2];
$objResponsable = new ResponsableV("Paula", "Lopez", 30, 201);
$objViaje = new Viaje (1,"Paris", 30,$objResponsable);

// $objViaje->setPasajeros($colPasajeros);

echo $objViaje->agregarPasajero("Jorge", "Perez", "38892401", "2996069039");
echo $objViaje->agregarPasajero("Jorge", "Perez", "38892401", "2996069039");


echo $objViaje;
