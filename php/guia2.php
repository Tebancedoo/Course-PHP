


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

    //defino las variables a usar
    $color1 = "";
    $color2 = "";
    $color3 = "";
    $color4 = "";

    $significado1 = "";
    $significado2 = "";
    $significado3 = "";
    $significado4 = "";

    //defino los arrays
    $arreglo = [ $color1  => "Amarrillo", $color2 => "Azul", $color3 => "Verde", $color4 => "Negro"];

    $arreglo2 = [ $significado1 => "Alegría, originalidad e inteligencia", $significado2 => "", $significado3 => "", $significado4 => "Elegancia y poder", ];


    echo "<thead>";

    echo "<tr>";
    echo "<th> Nombre </th>";
    echo "<th> Dirrección</th>";
    echo "<th> Telefono</th>";
    echo "<th> Fecha cumpleaños</th>";
    echo "<th> Color favorito</th>";
    echo "<th> Significado</th>";
    echo "</tr>";

    echo "</thead>";

    echo "<tbody>";

    echo "<tr><td> Pedro gonzales </td> <td>Calle 155  </td> <td> 555 </td> <td>22/enero </td> <td>Amarrillo </td> <td>Calor </td> </tr>";
    echo "<tr><td> Laura Herrera </td> <td>Calle 160  </td> <td> 888 </td> <td>10/diciembre </td> <td>Azul </td> <td>Frio </td> </tr>";
    echo "<tr><td> Luis Rodriguez </td> <td>Calle 789  </td> <td> 333 </td> <td>15/septiembre </td> <td>Verde </td> <td> Naturaleza </td> </tr>";

    echo "</tbody>";

    ?>

    </table>
                                                                  


</body>
</html>