<h2>Funciones de Arreglos en PHP</h2>
<?php

// array(): Esta función creará un nuevo arreglo y es muy útil 
// para trabajar con un arreglo
$students = array("Raul", "Zuri", "Juan");
echo $students[0] . " esta en la primera posicion y  " . $cars[2] . "esta en la ultima posicion.";
echo "<br><br>";

// is_array(): Se utiliza para verificar, si el dato que 
// recibe como parámetro es un arreglo o no. Devolverá true si 
// los datos  están en forma de arreglo; de lo contrario, devolverá false.

// Usando una condición if-else
if(is_array($students)) {
    echo 'Array';
} else {
    echo 'No es un Array';
}
echo "<br>";

$myname = "Amanda";
// Usando un operador ternario
echo is_array($myname) ? 'Array' : 'No es un Array';
echo "<br><br>";

// in_array(): Cuando necesitamos verificar si existe un valor 
// específico en un arreglo o no.
$students= array("Raul", "Zuri", "Juan", "Amanda");
$search1 = "Amanda";
$search2 = "Jonathan";

echo in_array($search1, $students) ? 'Existe' : 'No Existe';
echo "<br>";
echo in_array($search2, $students) ? 'Existe' : 'No Existe';
echo "<br><br>";

// sizeof(): Esta función contará el número de elementos en un 
// arreglo y retornará el recuento total. También podemos utilizar 
//la función count($arr) para contar los elementos del arreglo.
echo "Total Students are: ". sizeof($students)."<br>"; // 4
echo "Total Students are: ". count($students); // 4
echo "<br><br>";

// array_merge(): Se usa para combinar dos arreglos y hacer 
// un solo arreglo a partir de ambos. Puede combinar cualquiera de 
// los dos tipos de arreglo: indexado, asociativo.
$students_sectionA = array("Raul", "Zuri", "Juan", "Amanda");
$students_sectionB = array("Karen", "Hugo", "Noemí", "Noé");
$merge = array_merge($students_sectionA , $students_sectionB );
print_r($merge);
echo "<br>";
echo "Total Students are: ". count($students); // 4
echo "<br><br>";

// array_keys(): Para tomar únicamente las claves de un arreglo, 
// podemos usar esta función. Imprimirá todas las claves del arreglo.
$student = array("name"=>"Jonathan Córdoba", "class"=>"10th", "section"=>"A", "roll_no"=>"24");
$keys = array_keys($student);
print_r($keys);
echo "<br><br>";

// array_values(): Para tomar los valores de un arreglo, podemos usar esta función. 
// Imprimirá todas los valores del arreglo.
$values = array_values($student);
print_r($values);
echo "<br><br>";

// array_push(): Podemos agregar un nuevo elemento al final del arreglo.
$students_fes = array("Raul", "Zuri", "Juan", "Amanda");
array_push($students_fes, "Roberto");
print_r($students_fes);
echo "<br><br>";

// array_pop(): Podemos remover un nuevo elemento al final del arreglo.
array_pop($students_fes);
print_r($students_fes);
echo "<br><br>";

// array_unshift(): Podemos agregar un nuevo elemento al principio del arreglo.
array_unshift($students_fes, "Roberto","Gustavo");
print_r($students_fes);
echo "<br><br>";

// array_shift(): Podemos remover un nuevo elemento al principio del arreglo.
array_shift($students_fes);
print_r($students_fes);
echo "<br><br>";

// array_map(): En lugar de usar bucles for y foreach en PHP, 
// usamo la función array_map() para aplicar cualquier función a 
// los valores almacenados de un arreglo.
// NOTA: Para usar array_map requerimos una función auxiliar
function bouns($val) {
    if($val < 50) {
         return ($val + 1);
    } else{
        return $val;
    }
}

$students_number = array(78, 57, 69, 89, 49);
print_r(array_map('bouns', $students_number));
echo "<br><br>";

// array_flip(): Intercambiará todas las claves con sus valores asociativos en un Arreglo. 
// Esto significa que las claves del arreglo se convertirán en valores y los valores del arreglo 
// se convertirán en claves.
$student_flip = array("name"=>"Jonathan Córdoba", "class"=>"10th", "section"=>"A", "roll_no"=>"24");
$flip = array_flip($student_flip);
print_r($flip);
echo "<br><br>";

// array_unique(): Como entendemos por el nombre de la función, 
// se usa para filtrar el arreglo y deshacernos de los valores duplicados de la matriz.
// NOTA: Los valores no removidos mantienen el índice con el inicialmente
// fueron insertados
$students_rep = array("Raul", "Zuri", "Juan", "Amanda","Armando","Raul","Hugo","Zuri");
$students_rep = array_unique($students_rep);
print_r($students_rep);
echo "<br><br>";

// array_search(): Se utiliza para buscar el valor específico de 
// un arreglo y retorna el índice para ese valor que buscó.
$search = array_search("Zuri", $students_rep);
echo $search;
echo "<br><br>";

// array_reverse(): Esta función se usa para retornar un arreglo 
// en el orden inverso. Podemos conservar las claves en el mismo orden que inicialmente.
$reverse1 = array_reverse($students_rep);
print_r($reverse1);
echo "<br>";
$reverse2 = array_reverse($students_rep, true);
print_r($reverse2);
echo "<br><br>";

// sort(): Cuando deseamos ordenar los datos de un arreglo indexado, 
// use esta función. Ordenará el arreglo en orden ascendente.
sort($students_rep);
print_r($students_rep);
echo "<br><br>";

// rsort(): Cuando deseamos ordenar los datos de un arreglo indexado, 
// use esta función. Ordenará el arreglo en orden descendente.
rsort($students_rep);
print_r($students_rep);
echo "<br><br>";

// asort(): Ordenará los elementos de un arreglo asociativo en orden 
//ascendente y ordenará el arreglo de acuerdo con el valor de un arreglo.
$student_sort = array("name"=>"Jonathan Córdoba", "class"=>"10th", "section"=>"A", "roll_no"=>"24");
asort($student_sort);
print_r($student_sort);
echo "<br><br>";

// arsort(): Ordenará los elementos de un arreglo asociativo en orden 
// descendente y ordenará el arreglo de acuerdo con el valor de un arreglo.
$student_sort = array("name"=>"Jonathan Córdoba", "class"=>"10th", "section"=>"A", "roll_no"=>"24");
arsort($student_sort);
print_r($student_sort);
echo "<br><br>";

// array_sum(): Esta función es también una función mágica. 
// Si deseamos sumar todos los valores del arreglo, 
// debemos utilizar esta función. Ignorará si hay elementos de cadena en 
// el arreglo. Identificará automáticamente los números incluso si está entre comillas.
$student_no = array(60, "58", 89, 77, 85, 95, 72);
$total = array_sum($student_no);
echo $total;
echo "<br><br>";

// array_filter(): Esta función se usa para filtrar los valores 
// de un arreglo mediante una función callback personalizada con 
// una operación definida. Cada valor de un arreglo pasa a una 
// función callback para comparar el valor con la condición definida.
function average_number($val) {
    if($val < 75) {
         return $val;
    } 
}

$students_number = array(78, 57, 69, 89, 49, 56, 49, 86);
$students_number = array_filter($students_number, 'average_number');
print_r($students_number);
echo "<br><br>";

// implode(): La función implode() es utilizada para retornar 
// los elementos del arreglo como una cadena. También puede 
// pasar el separador para unir cada elemento del arreglo y 
// hacer una cadena.
$students = array("Raul", "Zuri", "Juan", "Amanda","Armando","Hugo");
$separator = "-";
echo implode($separator, $students);
echo "<br><br>";

// explode(): Esta función dividirá la cadena en elementos de un arreglo con el separador especificado (se requiere separador). 
// Creará un arreglo indexado.
$students = "Raul-Zuri-Juan-Amanda-Armando-Hugo";
$separator = "-";
$explode = explode($separator, $students);
print_r($explode);

?>
<hr>
<p>Para más referencias de funciones de cadenas ir a: <a href="https://www.w3schools.com/php/php_ref_array.asp">W3Schols</a></p>
