<?php

function primeNumber($n)
{

    for($i = 3; $i <= sqrt($n); $i += 2){
        if($n % $i == 0){
            echo("$n no es primo");
        }
    }

    echo("$n es primo");

}

print_r(primeNumber(101));

?>