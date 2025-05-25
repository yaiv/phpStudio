<?php include 'includes/header.php';

// CLASES ABSTRACTAS 
// La clase de transporte sirve como plano para heredar en otras clases, sin embargo, esta nunca debe de instacianciarse 

//Son las que no se pueden instanciar solo se pueden heredar y se hace mediante la palabra abstract


    /*NO INSTANCIAR */
    abstract class Transporte {
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


echo "<hr>";
  //Ejemplo erroneo
// $transporte = new Transporte(1, 3);
// echo $transporte->getInfo();

echo "<hr>";
$bicicleta = new Bicicleta(2, 1);

echo $bicicleta->getInfo();

echo "<hr>";

$auto = new Automovil(4, 5, "Manual");
echo $auto->getInfo();
echo "<br>";
echo $auto->getTransmision();

include 'includes/footer.php';