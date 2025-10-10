<?php

$numeros = [];

for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(0, 99);
}

echo "<ul>";
foreach ($numeros as $num) {
    echo "<li>$num</li>";
}
echo "</ul>";
?>