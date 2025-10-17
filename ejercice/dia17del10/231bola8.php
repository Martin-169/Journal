<?php

$answers = [
    "Sí",
    "No",
    "Quizás",
    "Claro que sí",
    "Por supuesto que no",
    "No lo tengo claro",
    "Seguro",
    "Yo diría que sí",
    "Ni de coña",
    "Probablemente",
    "No creo"
];

echo "Hazme una pregunta: ";
$ask = fgets(STDIN); 

$randomAnswer = $answers[array_rand($answers)];

echo "\nTu pregunta fue: \"$ask\"\n";
echo "Mi respuesta es: $randomAnswer\n";
?>