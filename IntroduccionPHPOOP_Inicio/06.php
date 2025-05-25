<?php include 'includes/header.php';

//INTERFACES 
//van a permitir agrupar un grupo de declaraciones de funciones pero no las van a implementar 
//La interfaz te dice solo que valores hay y que funciones retorna 
//Que hace una clase y que datos retorna pero no nos dice como lo hace 
//Cuidar los tipos de datos 

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


include 'includes/footer.php';


//Polimorfismo es como los objetos pueden tener diferentes formas 
//Tambien es cuando diferentes clases implementan una misma interfas
