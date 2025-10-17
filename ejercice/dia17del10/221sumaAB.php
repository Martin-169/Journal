<?php

echo "Introduce el número de inicio: ";
$ini = intval(trim(fgets(STDIN)));

echo "Introduce el número de fin: ";
$end = intval(trim(fgets(STDIN)));

if ($ini > $end) {
    echo "Error: el número de inicio debe ser menor o igual que el número de fin.\n";
    exit;
}

$sum = 0;
for ($i = $ini; $i <= $end; $i++) {
    $sum += $i;
}

echo "\nLa suma de los números desde $ini hasta $end es: $sum\n";
?>