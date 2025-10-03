<?php

$arrayAsVal = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($arrayAsVal);

echo "Array ordenado de forma ascendente y usando el value.";

foreach($arrayAsVal as $x => $x_value){
    echo "\nEdad de " . $x . " es: " . $x_value . "";
}

$arrayAsKey = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($arrayAsKey);

echo "\nArray ordenado de forma ascendente y usando la key.";

foreach($arrayAsKey as $x => $x_value){
    echo "\nEdad es " . $x . " es: " . $x_value . "";
}

$arrayDesValue = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($arrayDesValue);

echo "\nArray ordenado de forma descendente y usando el value.";

foreach($arrayDesValue as $x => $x_value){
    echo "\nEdad de " . $x . " es: " . $x_value . "";
}

$arrayDesKey = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($arrayDesKey);

echo "\nArray ordenado de forma descendente y usando la key.";

foreach($arrayDesKey as $x => $x_value){
    echo "\nEdad de " . $x . " es: " . $x_value . "";
}

?>