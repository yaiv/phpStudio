<?php include 'includes/header.php';

//Creacion de variables dependiendo del lenguaje el comportamiento es diferente 
//en php se comienza con signo de dolar 
//aplica las mismas reglas para nombre de variable 

$nombre = "yaiv";

//tambien es posible reasignar variables 
$nombre = "erick";




echo $nombre;
//te imprime mas informacion sobre una variable 
var_dump($nombre);

//para que no se reasigne es mediante la sintaxis
//propiedad define es casi seguro que sea constante
define('constante', "Este es el valor de la constante");
echo constante;

//otra forma no tan comun en php 
const constante2 = "hola2";
echo constante2;

//variables de dos palabras 
$nombreCliente = "padro";
$nombre_cliente = "padro";


include 'includes/footer.php';