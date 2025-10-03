<?php

$json ='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
    "Publisher": "Little Brown"
}}';

$data=json_decode($json, true);

echo("Title: " . $data["Title"] . "\n");
echo("Author: " . $data["Author"] . "\n");
echo("Publisher: " . $data["Detail"]["Publisher"]);

?>