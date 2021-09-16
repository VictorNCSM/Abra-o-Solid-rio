<?php
include("conexao.php");
include("validlogin.php");
session_start();

echo ""
echo "<b>Nome:</b> ", $_SESSION["nome"], "<br/>";
echo "<b>Email:</b> ", $_SESSION["email"], "<br/>";
echo "<b>Senha:</b> ", $_SESSION["senha"], "<br/>";
echo "<b>Senha:</b> ", $_SESSION["celular"], "<br/>";
echo "<b>Telefone Fixo:</b> ", $_SESSION["telefone_fixo"], "<br/>";
echo "<b>CPF:</b> ", $_SESSION["cpf"], "<br/>";
echo "<b>Dia de nascimento:</b> ", $_SESSION["dia"], "<br/>";
echo "<b>Mês de Nascimento:</b> ", $_SESSION["mes"], "<br/>";
echo "<b>Ano de nascimento:</b> ", $_SESSION["ano"], "<br/>";
echo "<b>Rua:</b> ", $_SESSION["rua"], "<br/>";
echo "<b>Bairro:</b> ", $_SESSION["bairro"], "<br/>";
echo "<b>Número:</b> ", $_SESSION["numero"], "<br/>";
echo "<b>Cidade:</b> ", $_SESSION["cidade"], "<br/>";
  

echo "<a href='alterar.php'>Alterar dados</a>.";

?>