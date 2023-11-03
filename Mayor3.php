<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if($num1>$num2 && $num1>$num3) {
    echo "El mayor es $num1";
} else if ($num2>$num1 && $num2>$num3) {
    echo "El mayor es $num2";
} else if($num3>$num2 && $num3>$num1) {
    echo "El mayor es $num3";
} else if($num1==$num3 && $num1> $num2) {
    echo "El mayor es $num1"; // números 1 y 3 iguales
} else if($num1==$num2 && $num1> $num3) {
    echo "El mayor es $num1";
} else if($num3==$num2 && $num3> $num1) {
    echo "El mayor es $num3";
} else {
    echo "Todos los numeros son iguales.";
}
?>