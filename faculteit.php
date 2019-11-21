<?php

$nm = readline("Van welk getal wil je de faculteit weten?");

$result = 1;

for ($i=1; $i <=$nm ; $i++) { 
$result = $result * $i;
}

echo "De faculteit van " . $nm . " is " . $result;
?>