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

#### Ahora veremos como imprimir un "!Hola mundo¡" en PHP, de 3 maneras distintas:

~~~
<¿php

echo "!Hola mundo¡";

print_r("!Hola mundo¡");

print("!Hola mundo¡");

?>
~~~

### Comentarios 

#### Para hacer un comentario se realiza así:

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

### Declarar constantes

#### Las constantes son valores al igual que las variables, con la diferencia de que las constantes no pueden cambiar de valor a lo largo del codigo. Estas se declaran así:

~~~

define("CONSTANTE", "Hola mundo.");

// Imprimir contante

echo CONSTANTE; 

~~~

### Asignar valor a una variable

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

#### Vamos a concatenar un hola mundo con el valor de la variable "$nombre":

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
- Strings o cadenas de texto: Un string, o cadena, es una serie de caracteres donde cada carácter es lo mismo que un byte ("!hola mundo").
- Numeric strings o cadenas de numero: Una cadena de PHP se considera numérica si se puede interpretar como un int o un float (0-9).
- Arrays o arreglos: Un arreglo es una estructura de datos que te permite almacenar múltiples elementos en una sola variable ( $array = array ("foo" => "bar","bar" => "foo",);).
- Iterables: Iterable Es un seudotipo introducido en PHP 7.1. Acepta cualquier array u objeto que implemente la interfaz Traversable function (foo(iterable $iterable) { foreach ($iterable as $valor) { } }).
- Objects u objetos: Es una instancia de una clase, y puedes crear múltiples instancias de la misma clase ( class foo{ function hacer_algo() { echo "Haciendo algo."; }}).
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

#### En PHP hay 3 tipos de visibilidad, 'public' se puede acceder desde donde sea; a los miembros declarados como 'protected', solo desde la misma clase, mediante clases heredadas o desde la clase padre y a los miembros declarados como 'private' únicamente se puede acceder desde la clase que los definió.

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


### Herencia de objetos 

#### La herencia es un principio de programación bien establecido y PHP hace uso de él en su modelado de objetos. Por ejemplo, cuando se extiende una clase, la subclase hereda todos los métodos públicos y protegidos de la clase padre. A menos que una clase sobrescriba esos métodos, mantendrán su funcionalidad original.

~~~

<?php

class A {
    public int $prop;
}
class B extends A { //Clase B hereda atributos y metodos de la clase A
    // Ilegal: lectura-escritura -> sólo lectura
    public readonly int $prop;
}
?>

~~~

### Operador de resolución de ámbito (::)

#### El Operador de Resolución de Ámbito (también denominado Paamayim Nekudotayim) o en términos simples, el doble dos-puntos, es un token que permite acceder a elementos estáticos, constantes, y sobrescribir propiedades o métodos de una clase.

~~~

<?php
class MyClass {
    const CONST_VALUE = 'Un valor constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // A partir de PHP 5.3.0

echo MyClass::CONST_VALUE;
?>

~~~

### La palabra reservada "static"

#### Declarar propiedades o métodos de clases como estáticos los hacen accesibles sin la necesidad de instanciar la clase. Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado (aunque un método estático sí lo puede hacer).

~~~

<?php
class Foo {
    public static function unMetodoEstatico() {
        // ...
    }
}

Foo::unMetodoEstatico();
$nombre_clase = 'Foo';
$nombre_clase::unMetodoEstatico(); // A partir de PHP 5.3.0
?>

~~~

### Abstracción de clases

#### Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos un método abstracto debe ser definida como tal. Los métodos definidos como abstractos simplemente declaran la firma del método, pero no pueden definir la implementación.

~~~

<?php
abstract class ClaseAbstracta
{
    // Forzar la extensión de clase para definir este método
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);

    // Método común
    public function imprimir() {
        print $this->getValor() . "\n";
    }
}
?>

~~~

### Interfaces de objetos

#### Las interfaces de objetos permiten crear código con el cual especificar qué métodos deben ser implementados por una clase, sin tener que definir cómo estos métodos son manipulados.

~~~

<?php

// Declarar la interfaz 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implementar la interfaz
// Ésto funcionará
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

?>

~~~

### Clases anónimas 

#### Las clases anónimas son útiles cuando es necesario crear objetos sencillos y únicos.

~~~

<?php

$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});

?>

~~~

### Iteración de objetos

#### recorrer una lista de elementos con, por ejemplo, una sentencia foreach. Por defecto, se utilizarán todas las propiedades visibles para la iteración.

~~~

<?php
class MiClase
{
    public $var1 = 'valor 1';
    public $var2 = 'valor 2';
    public $var3 = 'valor 3';

    protected $protected = 'variable protegida';
    private   $private   = 'variable privada';

    function iterateVisible() {
       echo "MiClase::iterateVisible:\n";
       foreach ($this as $clave => $valor) {
           print "$clave => $valor\n";
       }
    }
}

?>

~~~

### Clonación de objetos

#### Para crear una copia de un objeto se utiliza la palabra clave clone (que invoca, si fuera posible, al método __clone() del objeto). No se puede llamar al método __clone() de un objeto directamente.

~~~

$copia_de_objeto = clone $objeto;

~~~

### Comparación de objetos 

#### Al utilizar el operador de comparación (==), se comparan de una forma sencilla las variables de cada objeto, es decir: dos instancias de un objeto son iguales si tienen los mismos atributos y valores (los valores se comparan con ==), y son instancias de la misma clase.

~~~

<?php

function compararObjetos(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
}

?>

~~~

*** 

## Espacios de nombre

### Espacios de nombre

#### ¿Qué son los espacios de nombres? En su definición más aceptada, los espacios de nombres son una manera de encapsular elementos. 

~~~

<?php
namespace mi\nombre; 

class MiClase {}
function mifunción() {}
const MICONSTANTE = 1;

$a = new MiClase;
$c = new \mi\nombre\MiClase; 

$a = strlen('hola');

$d = namespace\MICONSTANTE; 
                            
$d = __NAMESPACE__ . '\MICONSTANTE';
echo constant($d); 
?>

~~~

*** 

## Variables predefinidas

### Variables predefinidas

#### Las variables representan de todo, desde variables externas hasta variables de entorno incorporadas, desde los últimos mensajes de error hasta los últimos encabezados recuperados.

- Superglobals: Superglobals son variables internas que están disponibles siempre en todos los ámbitos.
- $GLOBALS: Hace referencia a todas las variables disponibles en el ámbito global.
- $_SERVER: Información del entorno del servidor y de ejecución.
- $_GET: Variables HTTP GET.
- $_POST: Variables POST de HTTP.
- $_FILES: Variables de subida de ficheros HTTP.
- $_REQUEST: Variables HTTP Request.
- $_SESSION: Variables de sesión.
- $_ENV: Variables de entorno.
- $_COOKIE: Cookies HTTP.
- $php_errormsg: El mensaje de error anterior.
- $http_response_header: Encabezados de respuesta HTTP.
- $argc: El número de argumentos pasados a un script.
- $argv: Array de argumentos pasados a un script.

***

## Exepciones predefinidas

### Execpciones predefinidas

#### Los mensajes de eror que vienen con PHP desde su descarga

- Exception: Exception es la clase base para todas las excepciones en PHP 5, y la clase base para todas las excepciones de usuario. 
- ErrorException: Una excepción de error.
- Error: Error es la clase base para todos los errores de PHP internos.
- ArgumentCountError: ArgumentCountError es lanzado cuando muy pocos argumentos son pasados a una funcion o método definido por el usuario.
- ArithmeticError: Un ArithmeticError es lanzado cuando ocurre un error durante la realización de operaciones matemáticas. 
- AssertionError: Un AssertionError se lanza cuando falla una afirmación realizada mediante assert().
- DivisionByZeroError: Un DivisionByZeroError se lanza al intentar dividir un número por cero.
- CompileError: CompileError es lanzado por algunos errores de compilación, que anteriormente emitió un error fatal.
- ParseError: Un ParseError se lanza cuando ocurre un error al analizar código de PHP, tal como cuando se llama a eval().
- TypeError: Existen tres escenarios donde de podría lanzar un TypeError. El primero es donde el tipo de argumento pasado a una función no coincide con su correspondiente tipo de parámetro declarado. El segundo es donde un valor devuelto desde una función no coincide con el tipo de devolución declarado en la función. El tercero es donde se proporciona un número inválido de argumentos a una función interna de PHP (solamente en modo estricto). 

***

## Atributos predefinidos

### La clase atributos

#### Los atributos ofrecen la capacidad de agregar información de metadatos estructurada y legible por máquina en las declaraciones en el código. A continuación los veremos implementados

~~~

<?php
final class Attribute {

/* Constantes */

const int TARGET_CLASS;
const int TARGET_FUNCTION;
const int TARGET_METHOD;
const int TARGET_PROPERTY;
const int TARGET_CLASS_CONSTANT;
const int TARGET_PARAMETER;
const int TARGET_ALL;
const int IS_REPEATABLE;

/* Propiedades */

public int $flags;

/* Métodos */

public __construct(int $flags = Attribute::TARGET_ALL)
}

?>

~~~

***

## Protocolo y envolturas

### Protocolos y envolturas

#### PHP incorpora de serie envolturas para distintos protocolos tipo URL para trabajar junto con funciones del sistema de ficheros, como fopen(), copy(), file_exists() y filesize(). Además de estas envolturas, se pueden definir por el usuario utilizando la función stream_wrapper_register().

- file:// - Acceso al sistema de ficheros local.
- http:// - Acceso a URLS en HTTP(s).
- ftp:// - Acceso a URLs por FTP(s).
- php:// - Acceso a distintos flujos de E/S.
- zlib:// - Flujos de compresión.
- data:// - Data (RFC 2397).
- glob:// - Encuentra las rutas que coincidan con el patrón.
- phar:// - Archivo PHP.
- ssh2:// - Secure Shell 2.
 rar:// - RAR.
- ogg:// - Flujos de audio.
- expect:// - Flujos de Interacción de Procesos.


##### Si deseas informarte más sobre todo lo tratado en esta documentación, puedes visitar: https://www.php.net/manual/es/

<!--https://www.youtube.com/watch?v=nCB1gEkRZ1g--> <!--23:20-->

