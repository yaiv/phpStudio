<?php include 'includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

var_dump($num1 > $num2);
echo "<br>";

var_dump($num1 < $num2);
echo "<br>";

var_dump($num1 >= $num2);
echo "<br>";

var_dump($num1 <= $num2);
echo "<br>";

var_dump($num2 == $num3);
echo "<br>";

var_dump($num2 == $num4);
echo "<br>";

var_dump($num2 === $num4);
echo "<br>";

//este se fija si el de la izquierda es menor dara -1
var_dump($num1 <=> $num2);
echo "<br>";



include 'includes/footer.php';