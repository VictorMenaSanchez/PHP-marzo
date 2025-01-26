<?php

// Show the prime numbers between two numbers.


//Defino los dos números en los que se va a mover el rango de números primos.

$a = 1;
$b = 60;

echo "Prime numbers between $a and $b are:<br>";

/*
¿¡CONSEGUIDO!?
Este bucle for recorre todos los números de a hasta b.
*/

for ($i = $a; $i <= $b; $i++) { 
    /*
    Declaro la variable $isPrime como tru, asumiendo que todos los números van a ser primos y verificandolo después.
    */
    $isPrime = true;
    /*
    Si el número es menor que 2, se marcará como no primo, dado que el 1 y 0 no son primos.
    */
    if ($i < 2) {
        $isPrime = false; // Números menores que 2 no son primos
    } else {
        /*
        Si no, hago una comprobación de divisores.
        Este bucle verifica si el número $i tiene divisores distintos de 1 y él mismo.
        - Comienza en 2 porque 1 ya está comprobado.
        - Termina en la raíz cuadrada de $i.
        - Si un número no tiene divisores en este rango, no lo tendrá en rangos mayores.
            + POR EJEMPLO: Para comprobar si 29 es primo, basta con buscar divisores entre 2 y 5 
                (raíz cuadrada de 29 aproximadamente es 5,4 ).
        */
        for ($j = 2; $j <= sqrt($i); $j++) {
            /*
            Si encuentro algún divisor, el número es primo y cambio su estado.
            */ 
            if ($i % $j == 0) {
                $isPrime = false; 
                break; 
            }
        }
    }
    /*
    Imprimo por pantalla todos los $isPrime que sean true.
    */
    if ($isPrime) {
        echo "The number $i is prime.";
        echo "<br>";
    }
}
