<?php

echo "Calculadora de promedios!\n";

$numero = 1;

while($numero == 1){

  $nota_1 = readline("Ingrese la nota 1: ");

  if($nota_1 >= 1 && $nota_1<= 10){
    $numero = 0;
  }else{
      echo "El numero que ingresaste no es correcto\n";
  }

}

$numero = 1;

while($numero == 1){

  $nota_2 = readline("Ingrese la nota 2: ");

  if($nota_2 >= 1 && $nota_2<= 10){
    $numero = 0;
  }else{
      echo "El numero que ingresaste no es correcto\n";
  }

}

$numero = 1;

while($numero == 1){

  $nota_3 = readline("Ingrese la nota 3: ");

  if($nota_3 >= 1 && $nota_3 <= 10){
    $numero = 65;
  }else{
      echo "El numero que ingresaste no es correcto\n";
  }

}

$numero = 1;

while($numero == 1){

  $nota_4 = readline("Ingrese la nota 4: ");

  if($nota_4 >= 1 && $nota_4 <= 10){
    $numero = 0;
  }else{
      echo "El numero que ingresaste no es correcto\n";
  }

}





$promedio = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;


echo "El promedio de las 4 notas que ingresaste es: $promedio\n";

?>