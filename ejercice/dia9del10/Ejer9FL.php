<?php

$filas = 8;
$columnas = 8;
$matriz=[];

for ($i=1; $i <= $filas; $i++) { 
    
    for ($j=1; $j <= $columnas; $j++) { 
        if(($i+$j)%2 == 0){
            $matriz[$i][$j] = "Negro";
        }else{
            $matriz[$i][$j] = "Blanco";
        }
    }
}
print_r($matriz);
?>