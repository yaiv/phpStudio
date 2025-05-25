<?php include 'includes/header.php';

// HERENCIA
// CLASE PRINCIPAL Y CREAR OTRAS CON LOS MISMOS ATRIBUTOS Y METODOS QUE LA CLASE PRINCIPAL
// Esta es la clase principal

//Si se tiene un metodo que se parece mucho pero solo tiene pequeños cambios se les puede colocar el mismo nombre 
class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
    }


    // Permite reutilizar código ya que se creó nuevo método en la clase padre
    public function getRuedas() : int {
        return $this->ruedas;
    }
}

// Se va heredando en estas clases
class Bicicleta extends Transporte {

        //Metodo nuevo para la bicileta con el mismo nombre pero agregando atributos  
        public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y no gasta nada de GASOLINA..";
    }

}

class Automovil extends Transporte {
    // Agregar nuevas funciones o atributos en la clase hijo
    public function __construct(int $ruedas, int $capacidad, protected string $transmision)
    {
        parent::__construct($ruedas, $capacidad);
    }

    public function getTransmision() : string {
        return $this->transmision;
    } 
}

$bicicleta = new Bicicleta(2, 1);

echo $bicicleta->getInfo();

echo "<hr>";

$auto = new Automovil(4, 5, "Manual");
echo $auto->getInfo();
echo "<br>";
echo $auto->getTransmision();

include 'includes/footer.php';