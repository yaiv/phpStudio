<?php include 'includes/header.php';
//se acceden a ellos por meido de una propiedad
//puede contener todo tipo de datos 
$cliente = [
    'nombre' => 'Yair',
    'saldo' => 2000,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";  //el pre te permite visualizar de mejor manera su contenido 
var_dump($cliente);  
echo "</pre>";

//para acceder a la propiedad
echo $cliente['nombre'];

echo "<br>";
//para acceder a la informacion
echo $cliente['informacion']['tipo'];

//agregar nuevo valor al array 
echo "<br>";

$cliente ['informacion']['codigo'] = 256151351;
echo "<pre>";  //el pre te permite visualizar de mejor manera su contenido 
var_dump($cliente);  
echo "</pre>";


include 'includes/footer.php';