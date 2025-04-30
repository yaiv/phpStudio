<?php 
declare(strict_types=1);
include 'includes/header.php';

//funcion que retorna un valor + type
//string para que retorne algo si solo se quiere imprimir algo se puede hacer con void 
//Se puede colocar de manera opcional que se retorne algo ?string  asi en lo que son los return podria ser null

//Se cuentan tambien con uniones que significa que se pueden retornar un tipo de dato u otro 
//Se hace mediante string|int y en el return podria ser por ejemplo cadena de texto o un numero lo cual 
//dependiendo del valor que se le de en usuarioautenticado va a retornar  (true o false )
//Sin embargo no se va a retornar si se tiene tipos de datos diferentes y no estan definidos en la union 
function usuarioAutenticado(bool $autenticado) : string {
    if($autenticado){
        return "El usuario esta autenticado";
    }else {
        return "El usuario no esta autenticado";
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;



include 'includes/footer.php';