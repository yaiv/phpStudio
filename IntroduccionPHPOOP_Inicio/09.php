<?php include 'includes/header.php';

//Conectar a la BD con Mysqli y mysqli suporta funciones 
//Mejor performance y sin inyeccion de sql

$db = new mysqli('localhost', 'root', 'root', 'powermode'); //conexion a bd

//   var_dump($db);  este opjeto ya tiene todos los metodos 
$query = "SELECT titulo, precio FROM ropa";     //la consulta que se va a realizar 

$stmt = $db->prepare($query);  //que se prepare para realizar la consulta 

$stmt->execute(); //ejecutamos el stmt

$stmt->bind_result($titulo, $precio); //Crea automaticamente una variable con los rsultados de la consulta
//Solo trae un resultado 
$stmt->fetch(); //Se trae la variable con la informacion

//para traer todos los resultados, se ingresa en un while 

while($stmt->fetch()):
    var_dump($titulo, $precio); //Se imprime el resultado 
endwhile;
include 'includes/footer.php';