<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
<?php
// esto es un ejercicio de variable en php
// estos son array

$numero ="123";

$array = array("uno","dos","tres");
echo "<h1> array ejemplo</h1>";
echo "<p>los elementos: " . $array[0] . ",". $array[1] . " y " . $array[2] .", </p>";

// Ejercicio de operadores aritmeticos.
$a = 10;
$b = 5;
$suma = $a + $b;
$resta = $a - $b;
$multipli = $a * $b;
$div = $a / $b;

echo "<h1>Operadores aritmeticos</h1>";
echo "<p> la suma de $a y $b es: $suma</p>";
echo "<p> la resta de $a y $b es: $resta</p>";
echo "<p> la multiplicacion  de $a y $b es: $multipli</p>";
echo "<p> la divicion  de $a y $b es: $div</p>";

// ejercicio en clase
/* el señor calos y su esposa  tiene 5 hijos y 2 nietos
los nietos tuvieron 5 hijos cada uno 
pasado el tiempo fallecieron dos hijos y un nieto
el señor carlos muy triste cuenta cuantas personas quedan en su familia
incliyendolo a el.
realiza la formula e imprime el resultado.
*/
$caryesposa = 2;
$hijos = 5;
$nietos = 2;
$bis_niet = 10;
$fallecidos = 3;

$totafamilia = $caryesposa + $hijos + $nietos + $bis_niet;
$totalfinal = $totafamilia - $fallecidos;
echo " en la familia quedaron en total : $totalfinal </p>";

//ejercicio de estructura de control
// determinar el numero mayor de dos numeros

$num1 = 15;
$num2 = 14;
$num3 = 20;

if($num1 > $num2){
    echo" el numero mayor es: $num1";
}else{
    echo " el numero mayor es: $num2";
    
}

// determina el numero mayor de 3 numeros

if ($num1 > $num2 && $num1 > $num3){
    echo "el numero mayor es: $num1";
    
}elseif ($num2 > $num1 && $num2 > $num3){
    echo "el numero mayor es: $num2";
}else{
    echo "el numero mayor es: $num3";
}


?>
</body>
</html>