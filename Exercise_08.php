<?php

//Find the most repeated word in a text:


$text = "Hola ,mi nombre es iñigo montoya, tu mataste a mi padre, preparate a morir.";

$toArray = str_split($text);

print_r(array_count_values($toArray));

