


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

    $colores = array (  "color1"  => "Amarrillo", "color2" => "Verde", "color3" => "Negro");

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

 
    // for each de personas

    //foreach ($personas as $valor => $persona){ }

    //foreach ($direcciones as $valor => $direccion){ }

    //foreach ($telefonos as $valor => $telefono){ }

    //foreach ($cumpleaños as $valor => $fecha){ }

    //foreach ($significados as $valor => $significado){}

    $i = 0;

    foreach ($colores as $valor => $color){

    echo "<tr><td> $personas[$i] </td> <td> $direcciones[$i]  </td> <td> $telefonos[$i] </td> <td> $cumpleaños[$i] </td> <td> $color </td> <td> $significados[$i] </td> </tr>"; 
    echo $i;

    $i ++;

    

    }

    //$listadoEstudiantes[2]
    
    //echo "<tr><td> $persona </td> <td> $direccion  </td> <td> $telefono </td> <td> $fecha</td> <td> $color </td> <td> $significado </td> </tr>"; 


    echo "</tbody>";

    ?>

    </table>
                                                                  


</body>
</html>