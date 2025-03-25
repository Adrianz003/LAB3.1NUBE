<?php

$cadena = "Hola Mundo!";
$lista = [];

foreach (str_split($cadena) as $i) {
    $lista[] = $i;
    echo implode("", $lista) . "\n";
}
