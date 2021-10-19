<<<<<<< HEAD
<?php

include("conexao.php");
session_start();
$email = $_SESSION['email'];

# Coleta o id do usuário
$consulta = mysqli_query($conexao, "select * from usuario where email = '$email'");
$dados = mysqli_fetch_array($consulta);
$id = $dados["id_usuario"];



# Coleta as doações nas quais ele está interessado
$bdinteresse = mysqli_query($conexao, "select * from interesse where id_usuario = '$id'");
while ($interesse = mysqli_fetch_array($bdinteresse)){ 
    echo $interesse;
}




# coleta os dados da tabela de doacao
$consultadoacao = mysqli_query($conexao, "select from doacao where id_doacao = '$id_doacao'");

# Coleta dos dados do outro usuário

$id_vendedor = $consultadoacao["id_usuario"];

?>
=======
<?php
/*
    include("conexao.php");
    $id = $_GET["id"];

    $consulta = mysqli_query($conexao, "select * from doacao where id_doacao='$id'");
    $doacao = mysqli_fetch_array($consulta);
    */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, inicial-scale=1" />
    <style type="text/css">
        @font-face {
            font-family: Antapani;
            src: url("fontes/Antapani-ExtraBold");
        }

        #geral {
            width: 100%;
            height: 900px;
            border-style: solid;
            border-color: orange;
            margin-top: -8px;
            margin-left: -8px;
            top: 0px;
        }

        #titulo {
            border-style: solid;
            border-color: black;
            top: 20px;
            left: 50px;
            height: 200px;
            width: 350px;
            position: absolute;
            font-family: Antapani;
        }
    </style>
    <title>Abraço Solidário</title>
</head>

<body>
    <div id="geral">
        <div id="titulo">
            <h1>Doação de </h1>
        </div>
    </div>
</body>

</html>
>>>>>>> backup
