<?php

$cantidad_de_nombres = readline("Ingresa la cantidad de nombres: ");

$lista_nombres = [];

for($i = 0; $i < $cantidad_de_nombres; $i++){
     
    $nombre = readline("Ingresa el nombre $i:");

    $lista_nombres[$i] = $nombre;

}

print_r($lista_nombres);

?>