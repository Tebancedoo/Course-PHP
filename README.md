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
- Arrays o arreglos: Un arreglo es una estructura de datos que te permite almacenar múltiples elementos en una sola variable ( $array = array ("foo" => "bar","bar" => "foo",);)
- Iterables: Iterable Es un seudotipo introducido en PHP 7.1. Acepta cualquier array u objeto que implemente la interfaz Traversable function (foo(iterable $iterable) { foreach ($iterable as $valor) { } })
- Objects u objetos: Es una instancia de una clase, y puedes crear múltiples instancias de la misma clase ( class foo{ function hacer_algo() { echo "Haciendo algo."; }})
- Resourse o recurso: Un valor tipo resource es una variable especial, que contiene una referencia a un recurso externo.
- Null o nulos: El valor especial null representa una variable sin valor.
- Callbacks o llamadas de retorno: Una función callback, también conocida como solo callback, es una función que se pasa como argumento a otra función.

***

## Estructuras de control

#### Las estructuras de control son sentencias que nos permiten controlar el flujo de nuestro codigo basandose en cirtos factores.

- If: If evalua una sentencia, si la expresión es evaluada a su valor booleano. Si la expresión se evalúa como true, PHP ejecutará la sentencia y si se evalúa como false la ignoradá.
- Else: El else extiende una sentencia if para ejecutar una sentencia en caso que la expresión en la sentencia if se evalúe como false.
- Else if: El else if extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false. Esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif se evalúa como true.
- While: While ejecuta las sentencias anidadas, mientras la expresión while sea evalúada como true.
- Do while: Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. 
- For: For ejecuta una expresión, si una expresión se evalúa como true, el bucle continúa y se ejecutan la/s sentencia/s anidada/s. Si se evalúa como false, finaliza la ejecución del bucle.
- Foreach: El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada
- Break: Break finaliza la ejecución de la estructura for, foreach, while, do-while o switch en curso.
- Continue: Continue se utiliza dentro de las estructuras iterativas para saltar el resto de la iteración actual del bucle y continuar la ejecución en la evaluación de la condición, para luego comenzar la siguiente iteración.
- Switch: Swithc permite comprar varios valores y ejecutar una parte distinta de codigo dependiendo del valor proporcionado.
- Match: La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor.
- Declare: El constructor declare es usado para fijar directivas de ejecución para un bloque de código.
- Return: Return devuelve el control del programa al módulo que lo invoca. La ejecución vuelve a la siguiente expresión después del módulo que lo invoca.
- Require: Require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR.
- Include: La sentencia include incluye y evalúa el archivo especificado.
- Require_once: La sentencia require_once es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
- Include_once: La sentencia include_once incluye y evalúa el fichero especificado durante la ejecución del script.
- Goto: El operador goto puede ser usado para saltar a otra sección en el programa. 

***

## Funciones 

#### Las funciones de PHP, son acciones que se realizan de manera independiente. Son acciones que hacen que el código sea más legible y sencillo de depurar.

### Funciones definidas por el usuario

#### Estas funciones son creadas por el usuario y no vienen integradas en PHP.

~~~

<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Función de ejemplo.\n";
    return $valor_devuelto;
}
?>

~~~

### Argumentos de funciones 

#### Cualquier información puede ser pasada a las funciones mediante la lista de argumentos, la cual es una lista de expresiones delimitadas por comas. Los argumentos son evaluados de izquierda a derecha.

~~~

<?php
function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ".$entrada[0]+$entrada[1];
}
?>

~~~

### Devolver valores

#### Los valores son devueltos usando la sentencia opcional return. Se puede devolver cualquier tipo, incluidos arrays y objetos.

~~~

<?php
function cuadrado($núm)
{
    return $núm * $núm;
}
echo cuadrado(4);   // imprime '16'.
?>

~~~

### Funciones anónimas

#### Las funciones anónimas, también conocidas como cierres (closures), permiten la creación de funciones que no tienen un nombre especificado.

~~~

<?php
$saludo = function($nombre)
{
    printf("Hola %s\r\n", $nombre);
};

$saludo('Mundo');
$saludo('PHP');
?>

~~~

### Funciones flecha

#### Las funciones de las flechas tienen la forma básica fn (argument_list) => expr, de ahí su nombre, aparte estas soportan las mismas caracteristicas que las funciones anonimas.

~~~

<?php

$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
?>

~~~

***

## Clases y objetos

#### Las clases son el concepto en el cual se fundamenta la programación orientada a objetos, y sus instancias son las que crean objetos.

### Clases

#### La definición básica de una clase comienza con la palabra reservada class, seguida de un nombre de clase, y continuando con un par de llaves que encierran las definiciones de las propiedades y métodos pertenecientes a dicha clase.

~~~

<?php
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}
?>

~~~

### Constantes en clases

#### Es posible definir valores constantes en función de cada clase manteniéndola invariable. Las constantes se diferencian de las variables comunes en que no utilizan el símbolo $ al declararlas o emplearlas. La visibilidad predeterminada de las constantes de clase es public.

~~~

<?php
class MiClase
{
    const CONSTANTE = 'valor constante';

    function mostrarConstante() {
        echo  self::CONSTANTE . "\n";
    }
}

?>

~~~

### Visibilidad en clases

#### En PHPhay 3 tipos de visibilidad, 'public' se puede acceder desde donde sea; a los miembros declarados como 'protected', solo desde la misma clase, mediante clases heredadas o desde la clase padre y a los miembros declarados como 'private' únicamente se puede acceder desde la clase que los definió.

~~~

<?php
/**
 * Definición de MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
?>

~~~















































































<!--https://www.php.net/manual/es/-->

<!--https://www.youtube.com/watch?v=nCB1gEkRZ1g--> <!--22:30-->

