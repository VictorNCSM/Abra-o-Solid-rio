<?php
include("conexao.php");
include("validlogin.php");
session_start();


?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="POST" action="gravar.php">
        Id:<br>
        <input type="text" name="id" readonly value=<?php $_SESSION["id"] ?>><br><br>

        Nome:<br>
        <input type="text" name="nome" value=<?php echo $_SESSION["nome"] ?>><br><br>

        Email:<br>
        <input type="text" name="email" value=<?php echo $_SESSION["email"] ?>><br><br>

        Senha:<br>
        <input type="text" name="senha" value=<?php echo $_SESSION["senha"] ?>><br><br>

        Celular:<br>
        <input type="text" name="celular" value=<?php echo $_SESSION["celular"] ?>><br><br>

        Telefone:<br>
        <input type="text" name="telefone_fixo" value=<?php echo $_SESSION["telefone_fixo"] ?>><br><br>

        CPF:<br>
        <input type="text" name="cpf" value=<?php echo $_SESSION["cpf"] ?>><br><br>

        Dia de nascimento:<br>
        <input type="text" name="dia" value=<?php echo $_SESSION["dia"] ?>><br><br>

        Mês de nascimento:<br>
        <input type="text" name="mes" value=<?php echo $_SESSION["mes"] ?>><br><br>

        Ano de nascimento:<br>
        <input type="text" name="ano" value=<?php echo $_SESSION["ano"] ?>><br><br>

        Rua:<br>
        <input type="text" name="rua" value=<?php echo $_SESSION["rua"] ?>><br><br>

        Bairro:<br>
        <input type="text" name="bairro" value=<?php echo $_SESSION["bairro"] ?>><br><br>

        Número:<br>
        <input type="text" name="numero" value=<?php echo $_SESSION["numero"] ?>><br><br>

        Cidade:<br>
        <input type="text" name="cidade" value=<?php echo $_SESSION["cidade"] ?>><br><br>

        <input type="submit" Value="Enviar">

    </form>

</body>

</html>