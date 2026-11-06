<?php
/*EJERCICIO 3.- Programa que permita obtener una combinación de lotería primitiva (6 números entre 1 y 49).
 Cada número debe generarse mediante la llamada a la función dameNumero(), que retornará un número al azar
  entre 1 y 49. Los números no se pueden repetir.
  */
function dameNumero() {
    return rand(1, 49); 
}

$combinacion = [];
while (count($combinacion) < 6) {
    $numero = dameNumero();
    $combinacion[] = $numero;
}
echo "La combinación de la Loteria es: " . implode(", " , $combinacion);
?>
