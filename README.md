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

### Declarar contantes

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

### Tipos de datos 

#### Los tipos de datos son atributos que le indican a la computadora sobre la clase de datos que se va a manejar:

- Booleans o booleanos: Un boolean expresa un valor que indica verdad. Puede ser true (verdadero) o false (falso).
- Ints o enteros: Un número entero (o integer) es un número del conjunto ℤ = {..., -2, -1, 0, 1, 2, ...}.
- Float o flotantes: Los números de punto flotante son los Q = {..., 1.23456789, 3,1416, ...}.
- Strings o cadenas de texto: Un string, o cadena, es una serie de caracteres donde cada carácter es lo mismo que un byte ("!hola mundo")
- Numeric strings o cadenas de numero: Una cadena de PHP se considera numérica si se puede interpretar como un int o un float (0-9)
- Arrays o arreglos: Un arreglo es una estructura de datos que te permite almacenar múltiples elementos en una sola variable. ( $array = array ("foo" => "bar","bar" => "foo",);)
- Iterables: 
- Objects u objetos:
- Resourse o recurso:
- Null o nulos:
- Callbacks o llamadas de retorno:

### Manipulación de tipos























































































<!--https://www.youtube.com/watch?v=nCB1gEkRZ1g--> <!--14:38-->

