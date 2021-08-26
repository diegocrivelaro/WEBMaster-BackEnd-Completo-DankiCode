<?php
    /* Juntar 2 ou mais Arrays */
    $nome = ["Diego", "Marcos", "João", "Pedro"];
    $idade = [18, 20, 30, 25];
    print_r(array_merge($nome, $idade));

    echo "<hr>";

    /* Comparação de CHAVES */
    $cores1 = ["red"=>3, "green"=>40, "blue"=>25];
    $cores2 = ["yellow"=>40, "red"=>5, "purple"=>25];
    print_r(array_intersect_key($cores1, $cores2)); /* Array01 é array que vai ter as chaves verificas. Array02 é array para comparar as chaves  */

    echo "<hr>";

    /* Aplicar funções no ARRAY */
    $html = ["<h1>Pedro</h1>", "<h2>João</h2>"];
    print_r(array_map('strip_tags', $html)); /* Array_map aplica funções nativas ou não nativas no array */
?>
