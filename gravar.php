<?php
include("conexao.php");
include("busca.php");



# Coleta de dados
$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$celular = $_POST["celular"];
$telefone = $_POST["telefone_fixo"];
$cpf = $_POST["cpf"];
$dia = $_POST["dia"];
$ano = $_POST["ano"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];

if (isset($_POST["cpf"])) {
    $cpf = $_POST["cpf"];
} else {
    $cpf = 0;
}

# ========================================================================================


# Validação
if (strlen($senha) < 8) {
    echo "Sua senha é muito curta, volte à <a href='formcadastro.html'>página de cadastro</a> e se cadastre.";
} 
elseif (strpos($email, "@") == "") {
    echo "O E-mail inserido não é um e-mail válido. <a href='formcadastro.html'>Voltar ao formulário</a>.";
} 
elseif (strpos($email, ".com") == "") {
    echo "O E-mail inserido não é um e-mail válido. <a href='formcadastro.html'>Voltar ao formulário</a>.";
} 
elseif (isset($_POST["telefone"])){
    # valida se o telefone tem mais de 10 caracteres, se tiver, o 
    if (strlen($_POST["telefone"]) < 8) {
        echo "O número de telefone que você inseriu é muito curto. Por favor, <a href='formcadastro.html'>volte à página de cadastro</a>.";
    }
} 
elseif (strlen($celular) < 9) {
    echo "O número de celular que você inseriu é muito curto. Por favor, <a href='formcadastro.html'>volte à página de cadastro</a>.";
}
else{

    if ($_POST["mes"] == False) {
        $mes = $dados["mes"];
    } else {
        $mes = $_POST["mes"];
    }

    $telefone = $_POST["telefone_fixo"];
    $telefone = "(11)$telefone";

    $consulta = mysqli_query($conexao,"select * from usuario where email = $email");

    if($consulta == False){
        
        
        mysqli_query($conexao, "update usuario set nome='$nome' email='$email' senha='$senha' celular='$celular' telefone_fixo='$telefone' cpf='$cpf' dia='$dia' mes='$mes' ano='$ano' rua='$rua' bairro='$bairro' numero='$numero' cidade='$cidade' cep='$cep' where id_usuario='$id'");

        echo "Alteração de dados bem sucedida, prossiga para a <a href='areadoador.php'>área de usuário</a> ou vá para a <a href='index.html'>página inicial</a>";
    }
    else{
        echo "Você já está cadastrado";
    }

    
}
?>