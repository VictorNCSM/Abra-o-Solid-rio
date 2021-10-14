<?php
session_start();
include("conexao.php");

# Verificar o login, retorna true se o login existir
$login = $_SESSION["email"];

$consulta = mysqli_query($conexao, "select * from usuario where email = '$login'");

$dados = mysqli_fetch_array($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Área do doador</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <style type="text/css">
        .mainconfig {
            height: 250px;
            width: 100%;
            margin-top: 300px;
        }

        a {
            font-color: "#003889";
        }
    </style>
</head>

<body>

    <a href="dados.php">Dados</a><br />
    <a href=<?php if ($dados['opcao'] == 1) {
                echo '"formdoacao.html" target="mainconfig"> Doações';
            } else {
                echo '"formdoacao.html" target="mainconfig">Doações';
            } ?></a><br />
        <a href="mensagem.php" target="mainconfig">Envie sua mensagem</a><br />

        <iframe id="mainconfig" name="mainconfig" scrolling=auto frameborder="0" width=100% height=800px></iframe>
</body>

</html>