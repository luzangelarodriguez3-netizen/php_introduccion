<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  $cadena1 = "diego";
  $cadena2 = "juan";
  $cadena3 = "ana";
  $todo = $cadena1 . $cadena2 . $cadena3 . "<br>";
  echo $todo;
  $edad1 = 24;
  echo $cadena1 . " tiene $edad1 de edad";


/*Definir tres variables enteras. Luego definir un string que incorpore 
  dichas variables y las sustituya en tiempo de ejecución.

 Recordar que una variable se sustituye cuando el 
 string está encerrado por comillas dobles:

 $precio=90;
 echo "La computadora tiene un precio de $precio";*/

 $blusas = 20;
 $short = 15;
 $camisetas = 10;
 $inventario = $blusas . $short . $camisetas . "<br>";
 echo $inventario;
 echo "en el inventario tenemos $blusas blusas,$short shorts y $camisetas camisetas";
    
    ?>
</body>
</html>