<?php

/*
El "número mágico" de una persona se define como un único 
dígito obtenido al sumar los dígitos de su fecha de nacimiento repetidamente,
 hasta que el resultado sea un solo dígito. Escribe un programa en PHP que haga lo siguiente:

Reciba una fecha de nacimiento en formato "dd/mm/yyyy".
Elimine los caracteres que no sean números.
Sume los dígitos de la fecha.
Si el resultado tiene más de un dígito, repita el proceso hasta reducirlo a un solo dígito.
Muestra el "número mágico" resultante.
*/


$date = "14/05/1998"; // Fecha de nacimiento

$num = str_replace("/","", $date);

echo $num;

while ($num <= 10) {
   $add = 0;
   while ($num > 0){
      $add += $num % 10;

   }
}
