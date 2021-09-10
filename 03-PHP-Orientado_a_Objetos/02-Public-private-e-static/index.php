<?php
    class Usuario {
        public static string $nome; /* ESTÁTICO */
        public int $idade;
        public float $peso;
        public array $filhos = [];
    }

    $usuario1 = new Usuario();

    Usuario::$nome = "Diego"; /* ATRIBUINDO "DIEGO" AO ATRIBUTO ESTÁTICO */
    $usuario1->idade = 18;
    $usuario1->peso = 60.2;
    $usuario1->filhos = ["FILHO 1", "FILHO 2"];

    echo "Nome: ".Usuario::$nome. PHP_EOL. /* MOSTRANDO O ATRIBUTO ESTÁTICO */
        "Idade: ".$usuario1->idade. PHP_EOL.
        "Peso: ".$usuario1->peso. PHP_EOL.
        "Filhos: ". count($usuario1->filhos);
?>
