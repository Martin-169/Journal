<?php

function digits(int $num): int {
  
    $num = abs($num);
   
    return strlen((string)$num);
}

echo "Introduce un número: ";
$num = intval(trim(fgets(STDIN)));

echo "El número $num tiene " . digits($num) . " dígitos.\n";
?>