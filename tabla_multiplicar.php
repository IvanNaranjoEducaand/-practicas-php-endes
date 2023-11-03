<?php
$num = $_POST['num'];

    for ($i = 1; $i <= 10; $i++) {
        $multi = $num * $i;
        echo " $num x $i = $multi  <br>";
    }
?>