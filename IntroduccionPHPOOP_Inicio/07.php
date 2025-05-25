<?php include 'includes/header.php';


//Polimorfismo es como los objetos pueden tener diferentes formas 
//Tambien es cuando diferentes clases implementan una misma interfas

//Se pueden tener metodos que no estan definidos en la interfaz
interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

    //Se agrega la interfaz a la clase 
class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

//Nva clase heredando ya que es hija de transporte 
class Automovil extends Transporte implements TransporteInterfaz {
        public function __construct(protected int $ruedas, protected int $capacidad, protected string $color, protected int $puertas)
    {
        
    }

    public function getInfo() : string {
        return "El transporte Auto tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas, tiene color " . $this->color . " y cuenta con " . $this->puertas . " puertas para su comodidad";
    }

    public function getColor() : string {
        return "es de color" . $this->color;
    }

    public function getPuertas() : int {
        return " con " . $this->puertas;
    }
}


echo "<pre>";

var_dump($transporte = new Transporte(16, 2));
var_dump($auto = new Automovil(10,250, "Morado", 10));

echo "<hr>";

echo $transporte->getInfo();
echo "<hr>";
echo $auto->getInfo();
echo "<hr>";
echo "</pre>";

include 'includes/footer.php';