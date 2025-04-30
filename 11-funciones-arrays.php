<?php include 'includes/header.php';

echo "<br>";
//in_array - buscar elementos de un arreglo 

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));

//Ordenar elemento de un arreglo 
$numeros = array(1,3,4,5,1,2);
sort($numeros); //De menor a mayor
rsort($numeros);  //De mator a menor 

echo "<pre>";
var_dump($numeros);
echo "<pre>";

echo "<br>";

//Ordenar arreglo asociativo mediante asort
//asort ordena primero los numeros y luego ordena los valores por orden alfabetico
$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Yair'
];

asort($cliente); //ordena por valores (orden alfabetico)
arsort($cliente);//ordena por valores (orden alfabetico, DE LA Z a la A)
ksort($cliente); //ordena las llaves por (orden alfabetico)
krsort($cliente);//ordena por llaves (orden alfabetico, DE LA Z a la A)
echo "<pre>";
var_dump($cliente);
echo "<pre>";
include 'includes/footer.php';