<?php include 'includes/header.php';

//Conectar a la BD con PDO 
//Mayor soporte a a diferentes BD 

$db = new PDO('mysql:host=localhost; dbname=powermode', 'root', 'root');

$query = "SELECT titulo, precio FROM ropa";  

//preparar sentencia o consulta
$stmt = $db->prepare($query); 

//se ejecuta 
$stmt->execute();

//Se obtienen los resultados con el forch 
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC ); //Se especifica como se desean los datos 


//Se imprime 

foreach($resultado as $ropa):
echo $ropa['titulo'];
echo "<br>";
echo $ropa['precio'];
echo "<br>";
endforeach;
//Se imprime 
// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";
include 'includes/footer.php';