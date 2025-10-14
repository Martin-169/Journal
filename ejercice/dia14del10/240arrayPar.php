<?php

function esPar(int $num): bool{
    if($num%2 == 0){
        return true;
    }
    return false;
}

function arrayAleatorio(int $tam, int $min, int $max) : array {
    $array = [];
    
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function arrayPares(array &$array): int {
   $contador = 0;
    
   foreach ($array as $valor) {
        if (esPar($valor)) {
            $contador++;
        }
    }
    return $contador;
}

$numeros = arrayAleatorio(10, 1, 100);
echo "Array generado: ";
print_r($numeros);

echo "Cantidad de números pares: " . arrayPares($numeros);

?>