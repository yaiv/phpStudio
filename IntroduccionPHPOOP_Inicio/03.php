<?php include 'includes/header.php';
declare(strict_types_ = 1);

//Metodos Estaticos 

class Producto {

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
        
    } 


    //Metodos 
    //No requiere instanciarse  Instanciar es crear un objeto a partir de la clase.

    public static function obtenerProducto(){
        echo "Obteniendo datos del producto...";

    }

    public function mostrarProducto() : void {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;

    }
    
    public function getNombre() : string {
      return $this->nombre;
      }

    public function setNombre(string $nombre){  //Funcion para rescribir el nombre que se tiene en el objeto 
        $this->nombre = $nombre;
    }

}

echo Producto::obtenerProducto();

$producto = new Producto('Audifonos', 200, true);
//$producto->mostrarProducto();
echo $producto->getNombre();
echo $producto->setNombre('Probando set');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 8000, true);
// $producto2->mostrarProducto();


// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";


include 'includes/footer.php';