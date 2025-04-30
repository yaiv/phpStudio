<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

//Si se coloca || o el operador O, se valida que se cumpla una o la otra condicion 
//Si se coloca && AND, revisa que ambas condiciones se cumplan 
//
if ($autenticado && $admin) {
    echo "usuario autenticado correctamente";
}else {
    echo "Usuario no autenticado, inicia sesion";
}


//if anidados 

$cliente =[
    'nombre' => 'Yair',
    'saldo' => 0,
    'informacion' => [
        'tipo' =>'Premium'
    ]
    
    ];

if (empty($cliente) ){
    echo "El arreglo del cliente esta vacio";
} else {
    echo "El arreglo del cliente no esta vacio";
}

//ejemplo 
echo "<br>";

if (!empty ($cliente)){
    echo "El arreglo del cliento no esta vacio";

    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo disponible";
    }else {
        echo "no se tiene saldo";
    }
}

echo "<br>";

//else if 
if ($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
} else if ($cliente ['informacion']['tipo'] === 'Premium'){ //Si no se tiene saldo pero es premium
    echo "El cliente es Premium";
}else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

echo "<br>";
//Switch 

$tecnologia = 'JavaScript';
switch ($tecnologia){
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "JS, el lenguaje de la web!";
        break;
    
    default:
    echo "Algun lenguaje que no se sabe cual es";
    break;
}



include 'includes/footer.php';