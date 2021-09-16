<?php

include("conexao.php");

# Verifica se a variável de login e de senhas foram iniciadas. Se sim, ele salva os dados nas variáveis
if(isset($_POST["login"]) and isset($_POST["senha"])){
    $email = $_POST["login"];
    $senha = $_POST["senha"];

    # seleciona os dados do usuário no BD de acordo com o email que o usuário enviou no login
    $consulta = mysqli_query($conexao,"select * from usuario where email = '$email'");
    


    # Se o usuário estiver registrado no BD, ele será encontrado e a variável será verdadeira. Se não, o usuário não é autenticado.
    if ($consulta == true) {

        # Coloca os dados consultados num array
        $dados_usuario = mysqli_fetch_array($consulta);

        if($dados_usuario["senha"] == $senha){
            session_start();

            $_SESSION["id"] = $dados_usuario["id"];
            $_SESSION["nome"] = $dados_usuario["nome"];
            $_SESSION["email"] = $dados_usuario["email"];
            $_SESSION["senha"] = $dados_usuario["senha"];
            $_SESSION["celular"] = $dados_usuario["celular"];
            $_SESSION["telefone_fixo"] = $dados_usuario["telefone_fixo"];
            $_SESSION["cpf"] = $dados_usuario["cpf"];
            $_SESSION["dia"] = $dados_usuario["dia"];
            $_SESSION["mes"] = $dados_usuario["mes"];
            $_SESSION["ano"] = $dados_usuario["ano"];
            $_SESSION["rua"] = $dados_usuario["rua"];
            $_SESSION["bairro"] = $dados_usuario["bairro"];
            $_SESSION["numero"] = $dados_usuario["numero"];
            $_SESSION["cidade"] = $dados_usuario["cidade"];
            $_SESSION["donatario"] = $dados_usuario["donatario"];
            $_SESSION["doador"] = $dados_usuario["doador"];
            $_SESSION["autorizacao"] = $dados_usuario["autorizacao"];
            

            echo 'Cadastro autorizado com sucesso. <a href="index.html">Vá para a página inicial</a>.';
        }

    }
    else{

        echo 'Você ainda não está cadastrado. Por favor, vá à <a href="formcadastro.html">página de cadastro</a>.';

    }
    
}
else {

    echo 'Seu login ou senha estão incorretos, por favor, insira novamente voltando à <a href="login.html">página de login</a>.';

}


?>