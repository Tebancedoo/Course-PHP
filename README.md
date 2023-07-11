# Course-PHP

#### En este repositorio se encontrará  documentación y ejercicios con el lenguaje de programación "PHP" 

<div align="center"> 
<img src="https://github.com/zumrudu-anka/zumrudu-anka/blob/master/images/php.svg" height="300px"/>
</div>

***

## ¿Qué es PHP?

#### PHP (Hypertext Preprocessor) es un lenguaje de programación interpretado​ del lado del servidor y de uso general que se adapta especialmente al desarrollo web.​ Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.​ En la actualidad, la implementación de referencia de PHP es producida por The PHP Group.​

***
## SINTAXIS

### Apertura y cierre PHP

#### Para comenzar a codifiar en PHP debemos abrir las etiquetas del lenguaje, esto se realiza de la siguente manera:

~~~
<¿php

?>
~~~

### Imprimir un valor

#### Ahora veremos como imprimir un "!Hola mundo¡" en PHP de 3 maneras distintas:

~~~
<¿php

echo "!Hola mundo¡";

print_r("!Hola mundo¡");

print("!Hola mundo¡");

?>
~~~

### Comentarios 

#### Para hecer un comentario se realiza así:

~~~
// Esto es un comentario de 1 sola linea.

/* Esto es un comentario de
varias lineas */
~~~

### Declarar variables

#### Las variables son valores que pueden ir cambiando a lo largo del codigo, estas se declaran así:

~~~
<¿php

$nombre = '';

?>
~~~

### Declrar contantes

#### Las contantes son valores al igual que las variables, con la diferencia de que las contantes no pueden cambiar de valor a lo largo del codigo, estas se declaran así:

~~~

define("CONSTANTE", "Hola mundo.");

// Imprimir contante

echo CONSTANTE; 

~~~

### Asignar valor a variable

#### Siguendo con el ejemplo anterior, vamos a asignarle un valor a una variable: 

~~~

<¿php

// Recibir la información del formulario (con el metodo POST)
$nombre =$_POST['txtnombre']

// Asignar un valor a una variable
$nombre = 'nombre';

?>

~~~

###  Concatenar strings

#### Vamos a concatenar un hojla munod con el valor de la variable "$nombre":

~~~

<¿php

echo "Hola".$nombre;

?>

~~~























































































<!--https://www.youtube.com/watch?v=nCB1gEkRZ1g--> <!--14:38-->

