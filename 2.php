<?php

echo "Bienvenidos a la calculadora de ivas!\n";

$monto_total = readline("Ingrese el monto del producto a calcular: ");

$monto_con_iva = $monto_total * 1.21;

$monto_con_iva = number_format($monto_con_iva, 2);

$monto_con_iva_redondeado = (((int)($monto_con_iva / 0.05)) * 0.05);

echo "El monto total ingresado es de $monto_total\nEl monto con iva incluido es de $monto_con_iva\nEl monto redondeado es de $monto_con_iva_redondeado \nGracias";


?>