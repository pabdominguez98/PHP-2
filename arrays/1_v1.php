<?php

//Ingresamos 5 numeros entre 1 y 100

$arreglo_numeros = [];

$flag = 0;

while($flag < 5){

    $numero = readline("Ingrese un numero para procesar entre 1 y 100: ");

    if($numero > 0 and $numero < 100){
         $arreglo_numeros[$flag] = $numero;
         $flag++;
    }else{
        echo "Numero fuera de rango\n";
    }

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