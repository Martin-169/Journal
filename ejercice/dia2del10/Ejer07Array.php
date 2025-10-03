<?php

$numbers = array(1, 2, 3, 4, 5);

echo 'Array modificado: ';

foreach ($numbers as $x) {
    echo "$x ";
}

$add = '$';

array_splice($numbers, 3,0, $add);

echo "\nArray modificado: "; 

foreach ($numbers as $x) {
    echo "$x ";
}

?>