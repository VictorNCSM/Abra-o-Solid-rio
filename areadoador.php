<?
include("validlogin.php");

# Verificar o login, retorna true se o login existir
verifica_login = $_SESSION["email"];

verifica_senha = $_SESSION["senha"];

# Se o login e a senha existirem, eles retornarão true e a página será executada
if(($verfica_login == "true") and ($verifica_senha == "true")){

    echo '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Área de cadastro</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <style type="text/css">
            
            .mainconfig{
                height: 250px;
                width: 100%;
                margin-top: 300px;
            }

            a{
                font-color: "#003889";
            }

        </style>
    </head>
    <body>
            <a href="dados.php" target="mainconfig">Dados</a><br/>
            <a href="doacao.html" target="mainconfig">Doações</a><br/>
            <a href="mensagem.php" target="mainconfig">Envie sua mensagem</a><br/>

            <iframe id="mainconfig" name="mainconfig" src="doacao.html" scrolling=auto></iframe>
    </body>
    </html>';
}
else{

    echo 'Você não está logado. Vá à <a href="login.html">Página de login</a>.';
    
}




    ?>



