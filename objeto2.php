<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad de Formularios y Objetos</title>
</head>
<body>

    <?php

    class Formulario {

       
        public function Login()
        {
            echo '<h2>Formulario de Login</h2>';
           
            echo '<form action="#" method="post">';
            echo '<label for="usuario">Usuario:</label><br>';
            echo '<input type="text" id="usuario" name="usuario"><br><br>';
            echo '<label for="contrasena">Contraseña:</label><br>';
            echo '<input type="password" id="contrasena" name="contrasena"><br><br>';
            echo '<input type="submit" value="Enviar">';
            echo '</form>';
        }

        public function Registro()
        {
            echo '<h2>Formulario de Registro de Persona</h2>';
            
            echo '<form action="#" method="post">';
            echo '<label for="nombre">Nombre:</label><br>';
            echo '<input type="text" id="nombre" name="nombre"><br><br>';
            echo '<label for="apellido">Apellido:</label><br>';
            echo '<input type="text" id="apellido" name="apellido"><br><br>';

            echo '<label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>';
            echo '<input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br><br>';

            echo '<label>Sexo:</label><br>';
            echo '<input type="radio" id="masculino" name="sexo" value="masculino"> <label for="masculino">M</label><br>';
            echo '<input type="radio" id="femenino" name="sexo" value="femenino"> <label for="femenino">F</label><br>';
              
            echo '<input type="submit" value="Enviar">';

            echo '</form>';
        }
    }

    $Login = new Formulario(); // Creamos una instancia de nuestra clase.
    $Login->Login();   // Llamamos al método para que imprima el formulario.

    $Registro = new Formulario(); // Creamos otra instancia de la misma clase.
    $Registro->Registro(); // Llamamos al otro método para imprimir el segundo formulario.

    ?>

</body>
</html>