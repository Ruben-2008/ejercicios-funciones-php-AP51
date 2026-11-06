<?php
/* EJERCICIO 5.-  Crear una función que reciba un carácter y un número, y visualice una figura formada por esa letra de
 forma que, empezando por la impresión de este carácter, llegue a visualizar tantas filas como indica el número pasado 
 incrementando en el número de caractéres por fila, para finalmente decrecer hasta la visualización de un único carácter,
en decrementos equivalentes de 2. Por ejemplo, si la letra es * y el número es 4, debería escribir:

*
***
*****
*******
*****
***
*
*/
$caracter = "*";
$num = 4;


function impresion($caracter, $num) {
    // 1. Parte creciente: dibuja la mitad superior del diamante
    for ($i = 1; $i <= $num; $i++) {
        $totalCaracteres = (2 * $i) - 1;
        
        // Bucle interno para imprimir los caracteres de la fila actual
        for ($j = 0; $j < $totalCaracteres; $j++) {
            echo $caracter;
        }
        echo "<br>"; // Cambiar por "\n" si se ejecuta en consola o terminal
    }

    // 2. Parte decreciente: dibuja la mitad inferior del diamante
    for ($i = $num - 1; $i >= 1; $i--) {
        $totalCaracteres = (2 * $i) - 1;
        
        // Bucle interno para imprimir los caracteres de la fila actual
        for ($j = 0; $j < $totalCaracteres; $j++) {
            echo $caracter;
        }
        echo "<br>"; // Cambiar por "\n" si se ejecuta en consola o terminal
    }
}

// Llamada a la función
impresion($caracter, $num);

?>
