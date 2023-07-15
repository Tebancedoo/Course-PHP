<?php

    if ($_POST){ // Utilizo el condicional if para validar se se realizo un envio, y así evitar el error 

        $nombre = $_POST["txtNombre"];// Defino la variable para que reciba la información del formulario

        echo "Hola ".$nombre; //Concateno el valor de la variable con "hola"
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 PHP</title>
</head>
<body>
    
    <!--Creo un formulario basico-->
    <form action="ejercicio 2.php" method="post">
    Nombre: 

    <input type="text" name="txtNombre" id="">

    <br>

    <input type="submit" value="Enviar">

    </form>

</body>
</html>