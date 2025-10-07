<?php

$word = "w3resource";
$count = 0;

for($i=0; $i < strlen($word); $i++){

    if($word[$i] == "r"){
        $count++;
    }

}

echo "La letra r esta repetida $count veces."; 

?>