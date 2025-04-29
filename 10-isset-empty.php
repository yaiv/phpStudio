<?php include 'includes/header.php';

$clientes = [];
$clientes2 = [];
$clientes3 = ['Pedro', 'Ana', 'Yair', 'Viri'];
$clientes = [
    'nombre' => 'Yair',
    'saldo' => 200
];
 
//empy revisa si un arreglo esta vacio 
var_dump ( empty($clientes) );
var_dump ( empty($clientes2) );
var_dump ( empty($clientes3) );

//isset -revisa si un arreglo esta creado o una propiedad esta definida 
echo "<br>";
var_dump( isset($clientes4) );
var_dump( isset($clientes) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );

echo "<br>";

//revisar en arreglos asociativos si existe cierta propiedad 
var_dump( isset($clientes ['nombre']));
echo "<br>";

var_dump( isset($clientes ['codigo']));

include 'includes/footer.php';