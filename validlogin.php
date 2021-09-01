<?php

include("conexao.php");

# Verifica se a variável de login e de senhas foram iniciadas. Se sim, ele salva os dados nas variáveis
if(isset($_POST["login"]) and isset($_POST["senha"])){
    $login = $_POST["login"];
    $senha = $_POST["senha"];


    # seleciona os dados do usuário no BD de acordo com o email que o usuário enviou no login
    $consulta = mysqli_query($conexao,"select * from usuario where email = '$login'");
    

    # Se o usuário estiver registrado no BD, ele será encontrado e a variável será verdadeira. Se não, o usuário não é autenticado.
    if ($consulta == true) {
        $dados_usuario = mysqli_fetch_array($consulta);

        if($dados_usuario["senha"] == $senha){
            session_start();
            $_SESSION["login"] = $login;
            $_SESSION["senha"] = $senha;
            echo 'Cadastro autorizado com sucesso. <a href="index.html>"'
        }
    }
    else{
        echo 'Você ainda não está cadastrado. Por favor, vá à <a href="formcadastro.html">página de cadastro</a>.';
    }
    
}
else {
    echo 'Seu login ou senha estão incorretos, por favor, insira novamente voltando à <a href="login.html">página de cadastro</a>';
}


?>