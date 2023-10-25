


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia 2 PHP</title>
</head>
<body>

    <table border="3px" align="center">

    <?php

    //defino los arrays

    $personas = array ( "Pedro Gonzales", "Luz Fonseca", "Laura Patiño" );

    $direcciones = array ( "Calle 155", "Kr 39 sur", "Tv 55");

    $telefonos = array ( "78965", "5555", "74400");

    $cumpleaños = array ( "15 diciembre", "22 enero", "4 abril");

    $colores = array (  "color1"  => "amarrillo", "color2" => "verde", "color3" => "negro");

    $significados = array (  "amarrillo" => "Alegría, originalidad e inteligencia", "verde" => "", "negro" => "Elegancia y poder" );

    echo "<thead>";

    echo "<tr>";

    echo "<th> Nombre </th>";
    echo "<th> Dirección</th>";
    echo "<th> Telefono</th>";
    echo "<th> Fecha cumpleaños</th>";
    echo "<th> Color favorito</th>";
    echo "<th> Significado</th>";

    echo "</tr>";

    echo "</thead>";

    echo "<tbody>";

    //pruebas
    //foreach ($personas as $valor => $persona){ }
    //foreach ($direcciones as $valor => $direccion){ }
    //foreach ($telefonos as $valor => $telefono){ }
    //foreach ($cumpleaños as $valor => $fecha){ }
    //foreach ($significados as $valor => $significado){}
    //fin pruebas

    $i = 0;//Inicializo un contador

    foreach ($colores as $valor => $color){//hago el for each que me imprimira los colores del array "$colores"

    if ($significados[$color] == ""){//si el significo del array significados con el color del for each es igual a nada, me manda "No se encuentra el significado", de lo contrario me imprime el significado del color

    echo "<tr><td> $personas[$i] </td> <td> $direcciones[$i]  </td> <td> $telefonos[$i] </td> <td> $cumpleaños[$i] </td> <td> $color </td> <td> No se encuentra el significado </td> </tr>"; //esto "$personas[$i]" es para que me imprima los valores de los dintintos arrays, pero con el valor del contador, osea me imprime el valor 1 del arreglo si el contador es igual a 0 y asi sucesivamente
   
    } else{
        echo "<tr><td> $personas[$i] </td> <td> $direcciones[$i]  </td> <td> $telefonos[$i] </td> <td> $cumpleaños[$i] </td> <td> $color </td> <td> $significados[$color] </td> </tr>"; 
    }

    //otra prueba
    //echo $i; aqui imprimo el valor del contador para probar si es el correcto

    $i ++;//le incremento 1 al contador, 

    

    }

    //mas pruebas
    //$listadoEstudiantes[2]
    //echo "<tr><td> $persona </td> <td> $direccion  </td> <td> $telefono </td> <td> $fecha</td> <td> $color </td> <td> $significado </td> </tr>"; 


    echo "</tbody>";

    

    ?>

    </table>

                                                                  

</body>
<?php
echo "Hecho y elaborado por: Esteban Salcedo Perez";
?>
</html>