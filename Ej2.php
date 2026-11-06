<?php
/* EJERCICIO 2.- Programa que tras leer un número entre 1 y 10, muestre su equivalente en número romano.
Debes utilizar una función numRomano que reciba el número en formato decimal y lo devuelva en formato romano.
*/
 $num= rand (1,10);

 function numRomano ($num){ 
   $Romanos=[" ", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"];
return $Romanos[$num];
   }
   $resultadoRoma = numRomano($num);
echo "El número decimal es: " . $num . "<br>";
echo "En número romano es: " . $resultadoRoma;

 ?>