<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    == para ver si una variable es igual a otra.
!= distinto.
>= mayor o igual.
> mayor.
<= menor o igual 
< menor 

*/
$valor = rand(1, 10);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 5) {
    echo "Es menor o igual a 5";
  } else {
    echo "Es mayor a 5";
  }


  //Generar un valor aleatorio entre 1 y 100. Luego mostrar
  //si tiene 1,2 o 3 dígitos.

  $valor = rand(1, 100);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 9) {
    echo "Tiene un dígito";
  } else {
    if ($valor < 100) {
      echo "Tiene 2 dígitos";
    } else {
      echo "Tiene 3 dígitos";
    }
  }

  /*
  Generar un valor aleatorio entre 1 y 3. Luego imprimir 
  en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").

   Para ver si una variable es igual a 
   cierto valor debemos plantear una condición similar a:

if ($valor==3)
{
  //algoritmo
}
  */
$valor = rand(1,3);
echo $valor;
if($valor==1){
    echo "el valor es uno";
}else{
    if($valor ==2){
    echo "el valor es dos";
    }else{
    echo "el valor es tres";
    }

}

    
    
    ?>
</body>
</html>