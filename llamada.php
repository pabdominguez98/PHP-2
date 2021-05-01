<?php

require_once('./primos.php');

$numero = readline("Ingrese un numero para analizar: ");

if(es_numero_primo($numero) == 0){

    echo "El numero no es primo";

}else{

    echo "El numero es primo";

}


?>