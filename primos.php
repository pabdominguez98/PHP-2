<?php

function es_numero_primo($numero)
{

    $es_primo = 1;    // 0 para no, 1 para si

    if ($numero == 1 or $numero == 2) {

        $es_primo = 1;
    } else if ($numero > 2) {

        for ($i = 0; $i < $numero; $i++) {

            if ($numero % ($i + 2) == 0 and $i < ($numero - 2)) {

                $es_primo = 0;
            }
        }
    }

    if($es_primo == 0){

        return 0;

    }else{
        
        return 1;

    }
}






