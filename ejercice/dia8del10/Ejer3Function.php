<?php

function reverseString($word)
{

    $reversed = "";

    for($i= strlen($word) - 1; $i >= 0; $i--){
        $reversed .= $word[$i];
    }
    return $reversed;

}

print_r(reverseString("Hola") . "\n");

?>