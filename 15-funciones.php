<?php
declare(strict_types=1);
 include 'includes/header.php';

//Las funciones permiten reutilizar codigo 
//Dividir codigo en pequeñas operaciones


//cuando se requiera pasar parametros se pueden agregar en el parentesis ()
    //Definir la funcion 
function sumar (){
    echo 2 + 2;
}
    //Llamar la funcion
    sumar ();

    echo "<br>";
    echo "<br>";

//La funcion se hace mas inteligente al pasar argumentos o toma parametros 

//Tomadno parametros 


function sumar1 ( int $num1 = 0, int $num2 = 0 ){ //Parametros
    echo $num1 + $num2;
}

sumar1(10, 20); //Argumentos
    echo "<br>";
    echo "<br>";

    sumar1(50, 620); //Argumentos
    echo "<br>";
    echo "<br>";

    sumar1(5550, 33); //Argumentos
    echo "<br>";

//Si solo se pasa un argumento se mostrara error ya que se tiene dos parametros 
sumar1(50); //Argumentos
    echo "<br>";
    echo "<br>";

//Se soluciona agregando valor por defauld en la funcion num1 = 0, $num2 = 0;
//Se puede agregar el tipo de dato en los paremetros  
//Con el declare(strict_types=1); Se verifica la calidad de codigo añadiendo un tipado mas fuerte  



include 'includes/footer.php';