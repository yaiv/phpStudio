<?php include 'includes/header.php';


//es comun que las llaves sean las columnas de la BD 
$productos =[  
    
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Laptop',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 400,
        'disponible' => false
    ],
    [
        'nombre' => 'Camión',
        'precio' => 40000,
        'disponible' => false
    ],
];

// echo "<pre>";
// var_dump($productos);
// echo "</pre>";
//Este arreglo que se muestra en el navegador no se puede leer directamente en JS 
//Se tiene que convertir a json con una funcion ya definida por el lenguaje json 

//se realiza con $json = json_encode convierte arreglo a un string 
//Se valida tambien que se conviertan acentos 
echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //dE ARREGLO a String 

$json_array = json_decode($json, JSON_UNESCAPED_UNICODE); //DE String a Arreglo 
var_dump($json);
var_dump($json_array);

echo "</pre>";



include 'includes/footer.php';