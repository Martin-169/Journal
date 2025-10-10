<?php

$filas = 10;
$columnas = 10;
$matriz=[];

for ($i=1; $i <= $filas; $i++) { 
    
    for ($j=1; $j <= $columnas; $j++) { 
       $matriz[$i][$j] = $i * $j;
    }
}
print_r($matriz);
?>