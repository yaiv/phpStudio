<?php include 'includes/header.php';

//Los loops permiten ejecutar cierto codigo determinada de veces sin tene 

//Recorrer resultados de una BD 
//Hasta que una condificon se evaluada como falsa

//Primero revisa la condicion y despues ejecuta el codigo 
$i = 0;

while($i <10){
    echo $i . "<br>";
    $i++; //Incremento
}

echo "<br>";

//Do While 
//primero ejecuta el codigo y despues revisa la condicion 
//por ende se puede mostrar en pantalla 


$i = 0;
do {
    echo $i . "<br>";
    $i++;
}while ($i < 10);

echo "<br>";
echo "<br>";

//for loop  
//Siempre se ejecuta mientras una condicion sea evaluada como verdadera 
//o hasta que una condicion sea evaluada como falsa 
//tiene 3 partes: inicializador, incremento y la condicion

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// ## Ejercicio FizzBuzz
// Escribe un programa que imprima los números del 1 al 100, pero con las siguientes condiciones:

// - Si el número es múltiplo de 3, imprime "Fizz" en lugar del número.
// - Si el número es múltiplo de 5, imprime "Buzz" en lugar del número.
// - Si el número es múltiplo de ambos 3 y 5, imprime "FizzBuzz" en lugar del número.

// ## Requisitos
// - El programa debe imprimir los números del 1 al 100.
// - Debe cumplir con las condiciones mencionadas anteriormente.

// ## Tips
// - Puedes utilizar un bucle for para iterar sobre los números del 1 al 100.
// - Puedes utilizar la operación módulo (%) para verificar si un número es múltiplo de otro.

// ## Ejemplo de salida
// - 1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, ...


//FizzBuzz 

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// for ($i = 1; $i <= 100; $i++ ){
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo $i . " - Fizz Buzz <br/>";
//     } elseif ($i % 3 === 0) {
//         echo $i . " - Fizz <br/>";
//     } elseif ($i % 5 === 0) {
//         echo $i . " - Buzz <br/>";
//     } else {
//         echo $i . "<br>";
//     }

//}



//For Each
//Sirve para recorrer arreglos  

$clientes = [
    'Pedro', 'Juan', 'Yair'
];

foreach ( $clientes as $cliente ){
    echo $cliente . '<br/>';
}

//Utilizar foreach en arreglo asociativo 
$cliente = [
    'nombre' => 'Yaiv',
    'saldo' => 5000,
    'tipo' => 'Premium'
];

//Aqui se itera llave y tambien los valores  
foreach ( $cliente as $key => $valor ){
    echo $key . " - " . $valor . '<br/>';
}

echo count($clientes); //Te da la extension del arreglo de clientes  o se puede hacer mediante sizeof 

 echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

 //otra forma de recorrer un arreglo listando cada uno de los elementos 
for($i = 0; $i < count ($clientes); $i++){
    echo $clientes[$i] . "<br/>";
}


include 'includes/footer.php';
