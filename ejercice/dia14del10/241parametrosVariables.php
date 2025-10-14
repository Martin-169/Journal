<?php

function mayor(): int {

    $args = func_get_args();

    if (count($args) === 0) {
        return 0;
    }

    $mayor = $args[0];

    foreach ($args as $num) {
        if ($num > $mayor) {
            $mayor = $num;
        }
    }

    return $mayor;
}

function concatenar(...$palabras): string {
    return implode(' ', $palabras);
}

echo "El mayor es: " . mayor(5, 12, 8, 22, 3) . "<br>";
echo "Concatenación: " . concatenar("Hola", "mundo", "desde", "PHP") . "<br>";
?>