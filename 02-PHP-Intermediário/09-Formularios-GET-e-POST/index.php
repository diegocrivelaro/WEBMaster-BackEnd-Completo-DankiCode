<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários, GET e POST</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="submit" name="enviar" placeholder="Enviar">
        </form>
        <?php
        if(isset($_POST["enviar"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            echo "<hr>";
            echo "Seu nome é $nome";
            echo "<br>";
            echo "Seu email é $email";
        }else{
            echo "<hr>";
            echo "Sem dados";
        }
        ?>
    </body>
</html>