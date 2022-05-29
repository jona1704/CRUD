<h2>Funciones de Cadenas en PHP</h2>
<?php

// Funciones más importantes en PHP

$blog = 'Tu blog es Excelente';

// strlen() : Obtiene la longitud de una cadena y 
// devuelve un número entero.
echo strlen($blog); // 20
echo "<br><br>";

// strlen es frecuentemente usado para validar una
// entrada de datos o asegurarnos que una variable tenga valor
$valor = "fesAcatlan";
echo strlen($valor)>0 ? "Entrada Valida":"Entrada No Valida";
echo "<br><br>";

// substr() : Nos ayuda a acceder a una subcadena 
// entre los puntos inicial y final dados de una cadena.

echo substr($blog, 1)."<br>"; // u blog es Excelente
echo substr($blog, 0, 7)."<br>"; // Tu blog
// Podemos iniciar con negativos (-n), contando n posiciones
// iniciando la cuenta desde el último caracter y contando hacia atrá
echo substr($blog, -9)."<br>"; // Excelente
echo substr($blog, 3, -13)."<br>"; // Excelente
echo "<br><br>";

// str_replace() : Reemplaza algunos caracteres con otros 
// caracteres en una cadena.
$cadenas = array(
    'Te gustaría pasar un rato divertido',
    'Eres una persona muy agradable',
    '¿Te gustaría tomar una taza de café?'
);

$busqueda = array(
    'divertido',
    'rato',
    'persona',
    'café'
);

$reemplazar = array(
    'excelente',
    'aventura',
    'individuo',
    'te'
);

$reemplazado = str_replace($busqueda, $reemplazar, $cadenas);

print_r($reemplazado);
echo "<br><br>";

// trim() : elimina espacios en blanco y otros caracteres predefinidos 
// de ambos lados de una cadena.
$cad_trim = ' Esta es una cadena con espacio al inicio y final ';
var_dump($cad_trim);
$cad_trim = str_replace("con","sin", $cad_trim);
echo "<br>";
$trimmed = trim($cad_trim);
var_dump($trimmed);
echo "<br><br>";
// trim() esta relacionado con las funciones:
// ltrim() si queremos espacios del lado izquiedo
// rtrim() si queremos espacios del lado derecho

// strpos() : Encuentra la posición de la última ocurrencia de 
// una cadena dentro de otra cadena.
$aw_cadena = "Super Asombroso!";
echo strpos($aw_cadena, "!")."<br>"; // 15
// Con strpos() podemos determinar desde que posicion empezar la
// busqueda de un caracter.
echo strpos($aw_cadena, 'm', 3)."<br>"; // 9
// En caso de que el caracter buscado no esta en la cadena
// strpos() retorna false.
$resultado = strpos($aw_cadena, 'g');
if($resultado === false){
    echo "No encontrado";
} else{
    echo "Encontrado en la posicion ". $resultado;
}
echo "<br><br>";

// strtolower(): Convierte una cadena a minusculas
function convertir_min($string){
    return strtolower($string);
}

$frase = 'FES Acatlan - MAC';

echo convertir_min($frase);
echo "<br><br>";

// strtoupper(): Convierte una cadena a mayúsculas
function convertir_may($string){
    return strtoupper($string);
}

echo convertir_may($frase);
echo "<br><br>";

// Podemos capitalizar un texto
// ucfirst(): Convierte el primer caracter de una cadena
// a mayuscula
function capitalizar($string){
    return ucfirst(strtolower($string));
}

echo capitalizar($frase);
echo "<br><br>";

// is_string() : Verifica si una valor es una cadena
if(is_string(7)){
    echo "Sí es cadena";
} else{
    echo "No es cadena";
}
// No es cadena
echo "<br>";

if(is_string("7")){
    echo "Sí es cadena";
} else{
    echo "No es cadena";
}
// Sí es cadena
echo "<br><br>";

// strstr(): Busca la primera ocurrencia de una cadena 
// dentro de otra cadena.
$url = 'vegibit.com';
if (strstr ( $url, 'https://www.' ) === false) {
	$url = 'http://www.' . $url;
}
echo $url;
// https://www.vegibit.com
echo "<br><br>";

// strcmp() compara dos cadenas
/* La función retorna: 
    0 - si las dos cadenas son iguales
    <0 - si la cadena 1 es menor a la cadena 2
    >0 - si la cadena 2 es mayor a la cadena 2
*/
echo strcmp("Hello world!","Hello world!")."<br>"; // 0
echo strcmp("hello world!","Hello world!")."<br>"; // 32
echo strcmp("Hello world!","hello world!"); // -32
echo "<br><br>";

// explode(): divide la cadena en un arreglo en función del delimitador pasado.
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ",$str)); // Usamos como delimitador el espacio en blanco
echo "<br><br>";

// implode(): Une los elementos de un arreglo en una cadena 
// en función del delimitador pasado.
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
var_dump(implode(" ",$arr));
echo "<br><br>";

?>
<hr>
<p>Para más referencias de funciones de cadenas ir a: <a href="https://www.w3schools.com/php/php_ref_string.asp">W3Schols</a></p>
