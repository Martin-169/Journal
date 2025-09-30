<?php

echo("Dime un número");

$number = fgets(STDIN);

function absoluteNumber($number) 
{
    $x = 51;

    if ($number > $x)
    {
        return ($number - $x) * 3;
    }

    return $x - $number;
}

echo(absoluteNumber($number));

?>