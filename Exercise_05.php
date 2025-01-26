<?php

/*
¡CONSEGUIDO!

Create an array from elements present in both arrays.
(Los elementos que se repitan se mostrarán).
*/


/*
Lo primero que hago es definir dos arrays en los cuales se repiten un par de números.
*/
$a = [2,4,67,89];

$b = [3,4,66,89];

/*
Luego, uso el método array intersect.
Este, toma dos o más arrays como argumentos y devuelve un nuevo array que contiene los valores que están presentes en todos los argumentos.
Las claves que devuelve el nuevo array son las de el primer array que han aparecido repetidas

*/

$result = array_intersect($a, $b);

/*
Qué diferencia a print_r() de echo?

ECHO
Se utiliza para imprimir cadenas de texto o valores simples.
NO es capaz de manejar estructuras complejas como arrays u objetos.

PRINT_R
Puede mostrar estructuras de datos como arrays u objetos.
Muestra las claves y los valores.
*/


/*
Array intersect genera un nuevo array almacenado en este caso en $result.
*/

echo "Los valores con índice original son: ";

print_r($result);

echo "<br>";
/*
Array values genera un nuevo array en el cual los valores de los arrays toman nuevas claves.
Se generan unas nuevas, puede ser interesante porque array_intersect() conserva las del primer array comparado.
*/

$result = array_values($result);

echo "Los valores con nuevos indices son: ";

print_r($result);

echo "<br>";

/*
Para mostrar sólo los valores sin clave voy a usar implode().
*/

$soloValor = implode("-", $result);

echo "Los valores sin índice son: $soloValor";