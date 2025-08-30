<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    

    
    <!--este es un formulario html que envia datos (cliente)-->
    <form action="formulario.php" method= "post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"required><br><br>
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido"required><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php 
// procesamiento del formulario php - servidor
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    echo"Nombre: " .$nombre. "<br>";
    echo"Apellido: " .$apellido. "<br>";

}
    
?>

</body>
</html>