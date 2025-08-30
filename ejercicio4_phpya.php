<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia = date("d");
    if ($dia <= 10){
        echo"sitio activo";
    }else{
        echo "sitio fuera de servicio";
    }
    /*sabiendo que la funcion rand nos retorna un valor aleatorio
    entre un rango de dos enteros
    $num=rand(1,100)
    En la variable $num se almacena un valor entero que la computadora 
    genera en forma aleatoria entre 1 y 100.
    Hacer un programa que lo muestre por pantalla al valor generado. 
    Mostrar además si es menor o igual a 50 o si es mayor.
    Para imprimir el contenido de una variable también utilizamos el comando echo:

     echo $num; 


    */
     
     $num =rand(1,100);
     echo $num;
     echo "<br>";
     if($num <= 50){
        echo $num ."es menor";
     }else{
        echo $num."es mayor";
     }
        
     
    ?>
    
</body>
</html>