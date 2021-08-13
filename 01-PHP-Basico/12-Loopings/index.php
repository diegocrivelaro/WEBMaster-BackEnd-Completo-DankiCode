<?php
    for($contador=1; $contador <=10; $contador++){
        echo "$contador";
        echo "<hr>";
    }

    echo "<pre>";
    echo "</pre>";

    $contador = 20;
    while($contador <= 30){
        echo "$contador";
        echo "<br>";
        $contador++;
    }

    echo "<pre>";
    echo "</pre>";

    $contador2 = 0;
    do {
        echo $contador2;
    }while($contador2 != 0);

    echo "<pre>";
    echo "</pre>";  

    $array = ["laranja", "uva"];
    foreach($array as $frutas){
        echo $frutas . "<br>";
    }
?>