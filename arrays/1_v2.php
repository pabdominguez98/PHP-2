<?php

//Ingresamos 5 numeros entre 1 y 100

$arreglo_numeros = [];

for($i = 0; $i < 5; $i++){

   $arreglo_numeros[$i] = rand(1,100);

}

$numero_maximo = 0;

$numero_minimo = 100;

$auxiliar = 0;



for($i = 0; $i < 5; $i++){

    $auxiliar = $arreglo_numeros[$i];

    if($auxiliar > $numero_maximo){

        $numero_maximo = $auxiliar;

    }

    if($auxiliar < $numero_minimo){

        $numero_minimo = $auxiliar;

    }

}

echo "El numero maximo ingresado es $numero_maximo\nEL numero minimo es $numero_minimo";


?>