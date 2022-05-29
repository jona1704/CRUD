<?php 
include "../templates/php_header.php";

// Variables
$nombre = "Jonathan Cordoba";
// Tipos de variables
$edad = 30; // int
$promedio = 8.5; // float
$producto = "Television"; // string
$disponible = true; // bool
$arr = [1, 2, 3]; // arrays
$datos = null; // nulo
$obj = [
    "nombre"=> "Luis",
    "edad"=> 40
]; // Objetos o Arreglos asociativos

var_dump($obj["nombre"]); // Informacion sobre las variables

echo $obj["nombre"]."<br>"; // Accediendo al valor nombre

// Desplegando texto
echo "Hola Mundo<br>";
echo("Hola Mundo<br>");
print "Hola Mundo<br>";
print("Hola mundo<br>");
// Desplegando una variable
echo $nombre;

echo "<br><br>";

// Condicionales
$temperatura = 37;
if($temperatura<15){
    echo "Clima Frio<br>";
} else if($temperatura>15 && $temperatura<30){
    echo "Clima Templado<br>";
} else{
    echo "Clima Caluroso<br>";
}

echo "<br><br>";

$dia = "Jueves";
switch($dia){
    case "Lunes": echo "Es Lunes";
                  break;
    case "Martes": echo "Es Martes";
                  break;
    case "Jueves": echo "Es Jueves";
                    break;
    default: echo "Es fin de semana";
}
echo "<br><br>";

// Loops

// For
for($i=0; $i<5; $i++){
    echo $i."<br>";
}
echo "<br><br>";

// while
$i=0;
while($i<5){
    echo $i."<br>";
    $i++;
}
echo "<br><br>";

// do-while
$i=0;
do{
    echo $i."<br>";
    $i++;
} while($i<5);

echo "<br><br>";

$arr2 = [24, 26, 27, 21, 10]; // Arreglo indexado

echo $arr2[2]."<br>";

echo "<br><br>";

foreach ($arr2 as $valor) {
    echo $valor."<br>";
}

$articulos = [
    [
        "nombre"=> "Television",
        "precio" => 200,
        "disponible" => true
    ], 
    [
        "nombre"=> "Stereo",
        "precio" => 400,
        "disponible" => false
    ]
    
];

echo "<br><br>";

echo $articulos[0]["nombre"]."<br>";

echo "<br><br><br>";

// Recorrer todos los articulos
foreach($articulos as $articulo){
    // echo "<pre>";
    // var_dump($articulo);
    // echo "</pre>";
    echo "<p>Nombre: ". $articulo["nombre"] ."</p>";
    echo "<p>Precio: ". $articulo["precio"] ."</p>";
    //echo "<p>Disponibilidad: ". $articulo["disponible"] ."</p>";
    echo $articulo["disponible"]? "<p>Disponibilidad: Disponible</p>": "<p>Disponibilidad: No Disponible</p>";

    // if($articulo["disponible"]){
    //     echo "<p>Disponibilidad: Disponible</p>";
    // } else{
    //     echo "<p>Disponibilidad: No Disponible</p>";
    // }
}

include "../templates/php_footer.php";
?>