<?php
include("backend/conexao.php");

session_start();

$email = $_SESSION['email'];
$consulta = mysqli_query($conexao, "select * from usuario where email = '$email'");

$dados = mysqli_fetch_array($consulta);

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, inicial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

    <?php

        echo "<b>ID:</b> ", $dados["id_usuario"], "<br/>";
        echo "<b>Nome:</b> ", $dados["nome"], "<br/>";
        echo "<b>Email:</b> ", $dados["email"], "<br/>";
        echo "<b>Senha:</b> ", $dados["senha"], "<br/>";
        echo "<b>Celular:</b> ", $dados["celular"], "<br/>";
        echo "<b>Telefone Fixo:</b> ", $dados["telefone_fixo"], "<br/>";
        echo "<b>CPF:</b> ", $dados["cpf"], "<br/>";
        echo "<b>Dia de nascimento:</b> ", $dados["dia"], "<br/>";
        echo "<b>Mês de Nascimento:</b> ", $dados["mes"], "<br/>";
        echo "<b>Ano de nascimento:</b> ", $dados["ano"], "<br/>";
        echo "<b>Rua:</b> ", $dados["rua"], "<br/>";
        echo "<b>Bairro:</b> ", $dados["bairro"], "<br/>";
        echo "<b>Número:</b> ", $dados["numero"], "<br/>";
        echo "<b>Cidade:</b> ", $dados["cidade"], "<br/>";


        echo "<a href='alterar.php'>Alterar dados</a>"; 
    ?>


</body>
</html>