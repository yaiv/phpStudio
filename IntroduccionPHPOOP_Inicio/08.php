<?php include 'includes/header.php';

require 'vendor/autoload.php';
//Manejar diferentes clases de diferentes archivos 
//Se recomienda tener una clase por archivo 
//No se pueden tener dos clases que se llamen igual, ni en una misma carpeta dos archivos con el mismo nombre 

//Se generaron lsa clases de Clientes y Detalles 

//se incluyen clases 

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

//Listas para instanciar 

// $detalles = new Detalles();
// echo"<hr>";
// $cliente = new Clientes();


//Se coloca namespace desde el inicio para no tener que estar colocandolo 

USE App\Clientes;
USE App\Detalles;
//Cuando se tiene multiples clases tambien aumenta la cantidad de requiere y se puede simplificar atraves de Autoload

//funcion de mi_autoload se debe de pasar en autoload  AUTOCARGADOR DE CLASES 
//SE GENERO A TRAVES DE COMPOSER Y ESTA VENDOR
// function mi_autoload($clase){
//         $partes = explode('\\', $clase);
        
//        // echo $clase;

//     require __DIR__ . '/clases/' . $partes[1] . '.php'; //Se coloca ubicacion de las clases 
// }

// spl_autoload_register('mi_autoload'); //Busca las clases mientras se hayan importado 

//prueba con clase ya definida para el namespace

// class Clientes {
//     public function __construct()
//     {
//         echo "Desde la clase de clientes";
//     }
// }


$detalles = new Detalles();
echo"<hr>";
$cliente = new Clientes();
echo"<hr>";

$detalles = new Detalles();
echo"<hr>";
$cliente = new Clientes();
//Existen los name spaces que son para poder tener dos clases con el mismo nombre, como si fuera un subnombre
//Se declara el namespace en las clases y al utilizarlo en la clase se debe colocar antes de instanciar la clase 

//Ejemplo se tiene la clase 

// class Detalles {
//     public function __construct()
//     {
//         echo "Desde la clase de detalle";
//     }
// }

//Y se manda a llamar en ejemplo.php 
    //require 'clases/Detalles.php'

//Pero ahi ya esta declarada la clase 

// class Detalles {
//     public function __construct()
//     {
//         echo "Desde el ejemplo.php";
//     }
// }

//Se hace ahi uso del namespace en la clase de la siguiente manera 

// namespace app
// class Detalles {
//     public function __construct()
//     {
//         echo "Desde la clase de detalle";
//     }
// }

//y ahora en ejemplo.php ya se puede hacer la declaracion de ambas porque una tiene subnombre y se visualizaria de la sig manera al instanciar 

//detaller = new app\Detalles();



include 'includes/footer.php';