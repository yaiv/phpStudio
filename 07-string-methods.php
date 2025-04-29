<?php include 'includes/header.php';

//conocer la extension de un string 

$nombreCliente = "Yair Guerra";
echo strlen($nombreCliente);  //toma en cuenta espacion en blanco
var_dump($nombreCliente);  

//eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($texto);


//convertir texto a mayusculas --se puede con css pero en servidor se ocupara para validaciones
echo strtoupper($nombreCliente);

//convertir texto a minisculas
echo strtolower($nombreCliente);

//ejemplo verificar correo 

$mail1 = "correo@correo.com";
$mail2 = "correo@correo.com";

//Se convierte en minusculas y se verifica que sea lo mismo 
var_dump(strtolower($mail1) === strtolower($mail2));


//remplazar texto 
echo str_replace('Yair', 'Yaiv', $nombreCliente);

//Revisar si un string existe o no 

echo strpos($nombreCliente, 'Yair');

echo "<br>";
//concatenar 

$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente; //siempre que se quiera mezclar string con una varibale se le debe de agregar el punto para concatenar 
//otra forma de contatenar 
echo "El cliente {$nombreCliente} es {$tipoCliente} ";

include 'includes/footer.php';