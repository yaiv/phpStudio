<?php include 'includes/header.php';
//Solo existen 2 tipos de arreglos 

//arreglos indexados lo que mas se utiliza en php 
 //primera forma de crear 
$carrito = ['Tablet', 'Television', 'PC'];

//util para ver los contenidos de un array


//acceder a un elemento del array 
echo $carrito[2];

echo "<br>";

//Segunda forma de crear un arreglo 

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
//var_dump($carrito2da);
echo "<pre>";  //el pre te permite visualizar de mejor manera su contenido 
var_dump($clientes);
echo "</pre>";

//agregar elemento al array  en su indice 3

$carrito[3] = 'Nuevo Producto...';


//Añadir elemento al final del arreglo 
array_push($carrito, 'Audifonos');

//Añadir elemento al inicio del arreglo 
array_unshift($carrito, 'Laptop');

echo "<pre>";  //el pre te permite visualizar de mejor manera su contenido 
var_dump($carrito);
echo "</pre>";


include 'includes/footer.php';