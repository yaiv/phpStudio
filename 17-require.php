<?php include 'includes/header.php';

//existe lo que son los parametros nombrados y consta en  que se tengan declarados los  parametros 
//es posible reasignar la posicion que tiene 


function sumar ($num1 = 0, $num2 = 0){
   echo $num1 + $num2;
}

sumar (15, 20);
//Se realiza en los argumentos se coloca el nombre del parametro y el valor que va a tomar  /
//Con un parametro nombrado no es necesario declar con signo de dolar solo con el nombre de la varibale 

//ej: 
    sumar (num2: 10, num1:50);


//Include permite incluir otros archivos para hacerlo mas facil de reutilizar y evitar la repeticion de codigo 
// otra forma de agregar archvio externo es mediante 
//require  puede o no llevar parentesis 
    require 'includes/header.php';
//require se usa cuando se tenga funciones criticas para la app, tipo conexion bd 
//require se encarga de que la aplicacion no se ejecute si no se tiene cierta funcion especifica 

//Se utiliza include cuando se quiera incluir otros templates 
//Sigue funcionanado aunque no se encuentre el archivo 

//requere_once revisa si ya un archivo ya fue incluido de ser asi que se ignore 




include 'includes/footer.php';