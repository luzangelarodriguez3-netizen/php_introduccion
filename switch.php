<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // estrutura de control switch
$dia = 9;// 1 lunes, 2 martes, 3 miercoles
    switch ($dia){
        case 1:
            echo "hoy es lunes";
            break;
        case 2:
            echo "hoy es martes";
            break;
         case 3:
            echo "hoy es miercoles"."<br>";
            $numero = 7;
            if($numero % 2 ==0){
                echo "el numero es par";

            }else{
                echo"el numero es impar";
            }
            break;
            
            default;
            echo "la opcion no corresponde";
    
    }

    
    
    
    ?>
</body>
</html>