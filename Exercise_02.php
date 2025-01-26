<?php

/* 
¡CONSEGUIDO!
Show the average of even numbers between two numbers
 */

$a = 0;
$b = 10;
$r = 0;
$calculate = 0;

for ($i = $a; $i <=  $b ; $i++) { 
    if ($i % 2 == 0) {
        echo "The number $i is even";
        echo "<br>";
        $r++;
        $calculate += $i;
    }
}

echo "There is $r numbers between $a and $b";
echo "<br>";
echo "The average of the even numbers between $a and $b is: ";
echo $calculate / $r;
