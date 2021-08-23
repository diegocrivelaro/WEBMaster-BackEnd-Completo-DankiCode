<?php
session_start(); /* INICIAR A SESSÃO */

$_SESSION["Chave"] = "Valor";
$_SESSION["Chave2"] = "Valor2";

print_r($_SESSION);
?>

<?php
if(!isset($_COOKIE["CDC"])) {
    setcookie("CDC", "Bala Gelada Recheada", time() + 60, "/", "", "", true); /* SETANDO O COOKIE(NOME, VALOR, TEMPO) */
    echo "Cookie CDC foi setado!";
}elseif(isset($_COOKIE["CDC"])){
    print_r($_COOKIE["CDC"]);
}
?>
