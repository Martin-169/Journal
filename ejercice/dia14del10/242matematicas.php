<?php

function digitos(int $num): int {
    $num = abs($num);
    return strlen((string)$num);
}

function digitoN(int $num, int $pos): int {
    $numStr = (string)abs($num);
    if ($pos < 0 || $pos >= strlen($numStr)) {
        return -1; 
    }
    return (int)$numStr[$pos];
}

function quitaPorDetras(int $num, int $cant): int {
    $numStr = (string)abs($num);
    if ($cant >= strlen($numStr)) {
        return 0;
    }
    return (int)substr($numStr, 0, -$cant);
}

function quitaPorDelante(int $num, int $cant): int {
    $numStr = (string)abs($num);
    if ($cant >= strlen($numStr)) {
        return 0;
    }
    return (int)substr($numStr, $cant);
}

$numero = 123456789;

echo "Número: $numero<br>";
echo "Cantidad de dígitos: " . digitos($numero) . "<br>";

echo "Dígito en posición 3 (posicional): " . digitoN($numero, 3) . "<br>";
echo "Quitar 3 por detrás (posicional): " . quitaPorDetras($numero, 3) . "<br>";
echo "Quitar 2 por delante (posicional): " . quitaPorDelante($numero, 2) . "<br>";

echo "Dígito en posición (con nombre): " . digitoN(num: $numero, pos: 5) . "<br>";
echo "Quitar por detrás (con nombre): " . quitaPorDetras(num: $numero, cant: 4) . "<br>";
echo "Quitar por delante (con nombre): " . quitaPorDelante(num: $numero, cant: 4) . "<br>";
?>