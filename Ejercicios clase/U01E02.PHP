<?php
/*
1.	Define a variable with a number (for example 5)
 and using for loops create a page in which there is a table
  with as many rows as indicated in the variable
 and in each row there are as many * as the row number. (IN A TABLE)
*/
$a = 10;

echo "<table border='1'>";

for ($i=0; $i <= $a ; $i++) { 
    echo "<tr>";
    echo "<td>";
    
    for ($e=0; $e <= $i ; $e++) { 
        echo "*";
    }
    echo "</td>";
    echo "</tr>";
}

echo "</table>";

/*
Vale, he entendido que he necesitado dos bucles for para poder hacer la pirámide.
No ser qué clase de iluminación he tenido para adivinar que en el segundo for debía cambiar la variable de iteración a $i.
Supongo que por cada vez que itere el primer bucle imprimiré un salto de línea.
Después en el segundo bloque desede o hasta el número de iteraciones de $i, imprimiré un *.
Como no hay salto de línea, al hacer una iteración por ejemplo de $e = 2 entonces echo * *.


Según R2, el primer bucle controla el número de filas.
Por cada iteración del bucle se crea una nueva fila. (por lo que no es necesario hacer los <br> como estaba haciendo yo).
La variable $i indica cuántos asteriscos debe tener esa fila.
El segundo bloque controla cuántos asteriscos se imprimen por fila.
La condición $e <= $i asegura que el número de asteriscos impresos corresponde al número de fila actual.
El bucle interno se ejecuta y se detiene cuando $e supera $i.
En cada iteración del bucle externo, el valor de $i cambia, y eso define cuántas veces se ejecutará el bucle interno.
Cada vez que el bucle externo avanzam se imprime una nueva fila en la tabla.
Dentro de esa fila, el bucle interno imprime asteriscos según el número de iteración del bucle externo.

*/


/*
2.	Loop through an array of meals and days of the week (an associative array).
Exampleof array: 
Monday => pasta
Tuesday => rice
Wednesday => vegetables ……
The result have to draw a table with as many rows as days of the week and in each row two cells, one with the day of the week and one with the meal for these day. Use the structure:
NOT STATIC, THE INFORMATION SHOW HAVE TO BE EXTRACT FROM THE ARRAY.


*/

$meals = array(
    "monday" => "pasta",
    "tuesday" => "rice",
    "Wednesday" => "vegetables",
    "thursday" => "burguer",
    "friday" => "pizza"
);



foreach ($meals as $day => $meal) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>";
    echo $day . " => " . $meal;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

/*
Lo mío me ha costado declarar el array, y la tabla, digamos que no es de esta asignatura...
*/


/*
Defining a variable with a number (for example 5) and using while loops draws a ladder of numbers of the type:
*/

$b = 7;
$x = 0;
$s = 0;
while ($x <= $b) {
    $x ++;
    while ($s <= $x) {
        $s++;
        echo $s;
        echo "<br>";
    }
}