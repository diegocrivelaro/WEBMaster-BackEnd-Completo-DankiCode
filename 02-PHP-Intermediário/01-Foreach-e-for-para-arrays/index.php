<?php 
    $arr = array("Diego", "Marcos", "Matheus", "Felipe", "Mario");

    foreach($arr as $key => $value){ /* Foreach = CADA */
        echo $key;
        echo "=>";
        echo $value;
        echo "<br>";
    }

    echo "<hr>";

    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
        echo "<br>";
    }
?>