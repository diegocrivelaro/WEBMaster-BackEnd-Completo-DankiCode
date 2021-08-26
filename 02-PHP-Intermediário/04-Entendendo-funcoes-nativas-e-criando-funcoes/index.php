<?php
    function pessoa($nome = "Usuário", $idade = 0, $peso = 0){
        echo "<h2>Nome: $nome - Idade: $idade - Peso: $peso</h2>";
    }

    function somar($num1 = 0, $num2 = 0){ /* Estou passando um valor padrão, caso o usuário não coloque nenhuma informação nos parâmetros */
        $resultado = $num1 + $num2;
        return $resultado;
    }

    pessoa("Diego", 18, 65);
    echo somar(100, 100);
?>
