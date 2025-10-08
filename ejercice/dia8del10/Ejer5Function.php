<?php

function allLowercase($word)
{

    if(strtolower($word) == $word){
        echo("Tu palabra esta todo en minúscula");
        return true;
    }else{
        echo("Tu palabra tiene alguna mayúscula");
        return false;
    }

}

$word = "Hola";

print_r(allLowercase($word));

?>