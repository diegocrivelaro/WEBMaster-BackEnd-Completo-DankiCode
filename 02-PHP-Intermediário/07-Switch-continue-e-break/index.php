<?php
    $nome = "Marcos";

    switch($nome){
        case "Diego": /* Caso $nome seja Diego, imprima valor padrão */
            echo "Valor padrão";
            break;
        case "João": /* Caso $nome seja João, imprima valor João */
            echo "Valor João";
            break;
        case "Marcos": /* Caso $nome seja Marcos, imprima valor Marcos */
            echo "Valor Marcos";
            break;
        default: /* Caso $nome tenha um valor que não tenha um case, ele irá executar esse trecho de código */
            echo "Valor não encontrado";
            break;
    }
?>
