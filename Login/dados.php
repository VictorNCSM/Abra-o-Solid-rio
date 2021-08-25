<?php
$login=$_POST["login"];
$senha=$_POST["senha"];


if (strpos($login, "@" && ".")=="")

{

  echo "Email inválido! <a href='login.html'>Voltar</a>";


}else{

  
  echo "Login realizado com sucesso";


}


?>