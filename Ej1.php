<?php
/* EJERCICIO 1.- Programa que pida la edad de 2 hermanos e informe de la diferencia de edad existente entre ambos.
 Debes utilizar una función diferenciaEdad, que reciba las dos edades y retorne en valor positivo la diferencia entre ambos.
*/
 $edad1= rand (0,100);
 $edad2=rand(0,100);

function diferenciaEdad ($edad1, $edad2){
   return abs($edad1 - $edad2);
}
echo "La primera edad es: " . $edad1 . "<br>";
echo "La segunda edad es: " . $edad2 . "<br>";
echo "La diferencia de edad es de ". diferenciaEdad($edad1, $edad2); 
 ?>