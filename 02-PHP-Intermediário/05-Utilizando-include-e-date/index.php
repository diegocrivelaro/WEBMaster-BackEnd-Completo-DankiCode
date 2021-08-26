<?php
    $caminho = $_SERVER['SCRIPT_FILENAME'];
    include("header.php");

    date_default_timezone_set("America/Sao_Paulo"); /* Definindo o fuso horário */
    $data = date("d/m/Y H:i:s");
    echo $data;
?>
