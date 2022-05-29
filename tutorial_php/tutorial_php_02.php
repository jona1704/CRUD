<?php
include "../templates/php_header.php";

// Arreglos indexados
$array = [1, 2, 3, 4, 5];
echo $array[1]."<br>";

// Otra forma de arreglo indexado
$array2 = array("Pedro","Juan","Mateo");
echo $array2[1]."<br>";

// Arreglos asociativos
$cliente = [
    'nombre'=>'Jonathan',
    'saldo'=>200,
    'informacion'=>[
        'tipo'=>'Premium',
        'pagado'=>true
    ]
];


echo "<br>";
echo $cliente['nombre'];
echo "<br>";
echo $cliente['informacion']['tipo'];
echo "<br>";

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// isset y empty
$clientes = [];
echo "<br>";
var_dump(empty($clientes));
echo "<br>";
var_dump(isset($datos));

// Funciones
function sumar($num1, $num2){
    return $num1+$num2;
}

echo "<br><br>";
echo sumar(3, 4); // 7

// Arreglo de Objetos
$productos = [
    ["nombre"=>"Television 24'",
     "precio"=>200,
     "disponible"=>true],

    ["nombre"=>"Tablet",
    "precio"=>400,
    "disponible"=>true],

    ["nombre"=>"Estereo",
    "precio"=>500,
    "disponible"=>false]
];

echo "<br><br>";
foreach($productos as $producto){ ?>

    <p>Producto: <?php echo $producto['nombre']; ?></p>

<?php
}

include "../templates/php_footer.php";
?>