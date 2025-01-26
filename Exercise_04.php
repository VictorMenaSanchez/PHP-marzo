<?php
/*
¡CONSEGUIDO!
*/ 
//4. Array of subjects and grades, show grade, average, passes, and fails:

$array = array(
    "maths" => 0, 
    "language" => 5, 
    "sciencie" => 9
);

$aprobados = [];
$suspensos = [];

$grade_acumulator = 0;
$grade_counter = 0;
$media = 0;
/*

FOREACH.

El bucle foreach en PHP es una estructura de control para recorrer arrays u objetos.

En cada iteración coge uno de los elementos del array y lo asigna a una variable.
De esta manera, se puede trabajar con un elemento en concreto sin preocuparse de su índice.

El bucle foreach permite acceder tanto a la clave como al valor de cada elemento.
Muy útil para trabajar con datos organizados en clave-valor.


IMPLODE.

Implode en PHP se utiliza para convertir un array en una cadena de texto, uniendo los elementos con un separador que se especifica.

string implode(string $separator, array $array)

$separator es una cadena que se coloca entre los elementos del array.
Puede ser un espacio, una coma, un salto de línea, etc. ENTRE COMILLAS.
$array es el elemento de los arrays que quieres unir en cadena.
-----------------------------------------------------------------------------------------------

A MEJORAR.

- Calcular la media fuera del bucle, dado que la estoy calculando cada vez que itera.

- Separar la lógica de los aprobados y los suspensos:
    Se pueden guardar las asignaturas aprobadas y las suspensas en arrays separados.
    Al usar implode la salida será más clara.


*/


foreach($array as $subjet => $grade){
    echo "The subjet $subjet has a $grade grade.";
    $grade_acumulator += $grade;
    $grade_counter ++;
    //echo $grade_acumulator;
    echo "<br>";
    //echo $grade_counter;
    
    if ($grade < 5) {
        echo "The subjet $subjet is failed. ";
        $suspensos[] = $subjet;
    }else {
        echo "The subjet $subjet is passed. ";
        $aprobados[] = $subjet;
    }
    echo "<br>";
    echo "<br>";
    
    
}
$media = $grade_acumulator / $grade_counter;
echo "The failed subjets are " .implode(",", $suspensos);
echo "<br>";
echo "The passed subjets are " .implode(",", $aprobados);
echo "<br>";
echo "The media of the grades is: $media ";



