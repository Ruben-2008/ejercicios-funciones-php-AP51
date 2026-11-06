<?php
/* EJERCICIO 4.- A un trabajador le pagan según sus horas trabajadas semanalmente y según una tarifa fija 
determinada por hora. 
Si la cantidad de horas trabajadas semanalmente es mayor a 40 horas, la tarifa por hora se incrementa en un 25%
 (ya que, a partir de las 40 horas se consideran como horas extras).

Diseña un programa en PHP que calcule el salario de trabajadores de una empresa. Los datos de entrada para calcular el salario serán,
el nombre de la persona, las horas trabajadas semanales y la tarifa de una hora. 

Como datos de salida, el programa visualizará el nombre y el importe total cobrado durante esa semana. El programa 
calculará salarios de todos los empleados.

Obligatoriamente, debes utilizar una función calculaSalario, que reciba las horas trabajadas semanalmente y la tarifa 
por hora establecida, y devuelva el importe total del salario. Deberás establecer el valor por defecto de la tarifa a 10€.

*/
$empleados = [
   'Juan'=>[
      'horas' => 40,
      'tarifa' => 15
   ],
   'Perico'=>[
      'horas' => 20,
      'tarifa' => 25
   ],
   'Andrés'=>[
      'horas' => 45
   ],
];

function calculaSalario($horas, $tarifa = 10) {
    if ($horas > 40) {
        $horasNormales = 40;
        $horasExtras = $horas - 40;
        
        
        $tarifaExtra = $tarifa * 1.25;
        
        $total = ($horasNormales * $tarifa) + ($horasExtras * $tarifaExtra);
    } else {
        $total = $horas * $tarifa;
    }
    
    return $total;
}

foreach ($empleados as $nombre => $datos) {
   
    if (isset($datos['tarifa'])) {
        $importeTotal = calculaSalario($datos['horas'], $datos['tarifa']);
    } else {
        $importeTotal = calculaSalario($datos['horas']);
    }
    echo "El empleado  " . $nombre . " ha cobrado un importe semanal de  " . $importeTotal . "€ <br>" ;
}
?>
