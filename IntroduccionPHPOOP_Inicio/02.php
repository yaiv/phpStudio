<?php include 'includes/header.php';
declare(strict_types_ = 1);

//ENCAPSULACION
//Principio de PHP: Entre mas cerrado es mejor 
//geters y seteres para obtener un valor se utiliza get para modificar un valor se ocupa set


//NUEVA FORMA CON PHP 8

class Producto {

    //Modificadores de acceso definen la visibilidad de las propiedades y métodos de una clase

//     //Public - Se puede acceder y modificar en cualquier lugar (clase y objetos)
        //     Qué hace: Permite que cualquiera (desde dentro o fuera de la clase) acceda al atributo o método.
        // Cuándo usarlo: Cuando quieres que algo esté disponible de forma abierta. Por ejemplo, un método que debe ser usado desde cualquier parte de tu aplicación.

    //protected - Se puede acceder unicamente en la clase 

        // Qué hace: Solo puede ser accedido dentro de la misma clase o por clases hijas (herencia).
        // Cuándo usarlo: Cuando quieres proteger un dato o comportamiento, pero permitir que una subclase lo modifique o lo use
        

    //private solo miembros de la misma clase pueden acceder a el 

        // Qué hace: Solo puede ser accedido dentro de la misma clase. Ni siquiera clases hijas (herencia) pueden acceder directamente.
        // Cuándo usarlo: Cuando quieres proteger datos para que no se modifiquen directamente desde afuera (encapsulamiento). Normalmente usado en atributos sensibles.
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
        
    } 

    //Metodos 

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