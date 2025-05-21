<?php include 'includes/header.php';
declare(strict_types_ = 1);

//ABSTRACCION
//Los metodos y las propiedades o atributos son visibles y se pueden acceder desde cualquier parte 

//Tres paso 
//Definir una clase
//Agregar atributos, propiedades o variables 
//Instanciar la clase 



// 1. Definir clase	Escribes el plano	class Perro { ... }
// 2. Agregar atributos	Le das características	public $nombre;
// 3. Instanciar clase	Creas un objeto real	$miPerro = new Perro();



// //En las clases se va a tener la misma forma, sin embargo, en el objeto se va a tener diferente informacion 

//FORMA ANTIGUA

// class Producto {
//     public $nombre;
//     public $precio;
//     public $disponible;

//     //Costructor: Es una funcion que se manda a llamar automaticamente una vez que se crea una nueva instancia 

//     public function __construct(string $nombre, int $precio, bool $disponible)
//     {
//         //Evita que se revuelvan los objetos y que cada atributo qu se agrege a la clase se guarde donde debe ir 
//         $this->nombre = $nombre;
//         $this->precio = $precio;
//         $this->disponible = $disponible;
//     }
// }


//NUEVA FORMA CON PHP 8

class Producto {
    
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        
    } 

    //Metodos 

    public function mostrarProducto(){
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;


    }

}

$producto = new Producto('Audifonos', 200, true);
$producto->mostrarProducto();
// $producto->nombre='Tablet';
// $producto->precio=3800;
// $producto->disponible=true;
//Para acceder a los valores de estos objetos es mediante sintaxis de flecha
// $producto->nombre;
// $producto->precio;
// $producto->disponible;


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 8000, true);
$producto2->mostrarProducto();

// $producto2->nombre='PC Gamer';
// $producto2->precio=18000;
// $producto2->disponible=true;

echo "<pre>";
var_dump($producto2);
echo "</pre>";
include 'includes/footer.php';