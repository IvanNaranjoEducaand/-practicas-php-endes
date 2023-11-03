<?php
    
    $dias = array(
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado",
        7 => "Domingo"
    );

if(isset($_POST['num'])) {
    $numero = $_POST['num'];
    
    if ($numero >= 0 && $numero <= 6) {
        $diaCorrespondiente = $dias[$numero];
        echo "El día correspondiente al número $numero es: $diaCorrespondiente";
    } else {
        echo "El número debe estar en el rango del 1 al 7.";
    }
    
}

?>