<?php

$numero = 1;
$suma = 0;

while($numero == 1){

    $ingreso = readline("Ingrese un numero para sumar/ ingresa -1 para salir: ");

    $suma = $suma + $ingreso;

    if($ingreso == -1){
        $numero = 0;
    }

}

echo "\nLa suma de los numeros ingresados es $suma\nPrograma finalizado.\n";



?>