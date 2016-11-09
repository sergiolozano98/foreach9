<?php
$tablas=["primera"=>5,"segunda"=>13,"tercera"=>11];
//El $num seria 5,13,11
//el $num coje los numeros 5,11.13 por que le indicamos la relacion en el foreach con el as
foreach ($tablas as $num) {
  echo "<br>";
  for ($i=1; $i <= 10 ; $i++) {
    //en el for el i es el incremento del numero por el cual se va a multiplicar los num del ArrayAccess
    //le indicamos que el incremento llegue hasta un maximo de que sea menor o igual a 10
    // y le indicamos que se haga con el incremento con el $i++
  $resultado= $i*$num;
  //realizmaos la operacion que sea igual al incremento por el num que estan dentro del array.
  echo "$num x $i = $resultado<br>";
  // en este echo lo que nos muestra es el Num del array y luego los incrementos que hemos indicado antes y el resultado de la operacion.
  }
}


 ?>
