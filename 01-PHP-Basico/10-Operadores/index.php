<?php
    /* OPERADOR DE INCREMENTO */
    $valor1 = 20;
    echo ++$valor1;
    echo "<hr>";

    /* OPERADOR DE DECREMENTO */
    echo --$valor1;
    echo "<hr>";

    /* OPERADORES DE COMPARAÇÃO */
    if(10 == "10"){
        echo "10 = 10";
        echo "<hr>";
    }

    if(10 != 11){
        echo "10 é diferente de 11";
        echo "<hr>";
    }

    if(10 === "10"){
        echo "10 é igual a 10";
        echo "<hr>";
    }
    else{
        echo "10 é diferente de \"10\"";
        echo "<hr>";
    }

    if(10 !== "10"){
        echo "10 não é idêntico á \"10\"";
        echo "<hr>";
    }

    print_r(10 <=> 20); /* (-1) Lado esquerdo é menor */
    echo "<hr>";
    print_r(20 <=> 20); /* (0) Ambos são iguais */
    echo "<hr>";
    print_r(30 <=> 10); /* (1) Lado direito é menor */
?>
