<?php
    include("../php/conexao.php");
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $stringCorrigida = str_replace('.', '', $cpf);
    $stringCorrigida = str_replace('-', '', $stringCorrigida);
    $data = $_POST['data'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmaSenha'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numeroC = $_POST['numeroCasa'];
    $complemento = $_POST['complemento'];
    //verificação de senhar em uma function
    if ($senha == $confirmarSenha) {
        $senha = md5($_POST['senha']);
        $alert2 = "<script>alert('Cadastro efetuado com sucesso !');</script>";
        echo $alert2;
        $res_Usu = "INSERT INTO cliente (Nome_completo, Data_nascimento,Sexo,Email,Senha,Endereço_Logradouro,Endereço_Num_residencia,Endereço_Complemento,cpf,Num_tel,Endereço_CEP)
        VALUES ('$nome','$data','$sexo','$email','$senha','$endereco','$numeroC','$complemento','$stringCorrigida','$telefone','$cep')";
        $resultado_Usu = mysqli_query($conn, $res_Usu);
        include_once('../html/index.php');
    }else {
        $alert = "<script>alert('Você deve digitar duas senhas iguais nos campos Senha e Confirmar a Senha');</script>";
        echo $alert;
        include_once('../html/cadastro.html');
    }
?>