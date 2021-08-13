<?php
    $num = array(10, 20, 10, 20);
    if($num[0] >= $num[1]){
        echo "É maior";
    }
    elseif($num[0] <= $num[1]){
        echo "É menor";
    }

    echo "<br>";

    /* OPERADOR LÓGICO ($$) */
    $idade = 18;
    $nome = "Diego";

    if(($idade == 18) and ($nome == "Diego")){
        echo "É verdadeiro as duas afirmativas ";
        echo "<hr>";
    }

    /* OPERADOR LÓGICO (||) */
    $idade = 18;
    $nome = "Diego";

    if(($idade == 30) or ($nome == "Diego")){
        echo "É verdadeiro uma das afirmações ";
        echo "<hr>";
    }
?>
