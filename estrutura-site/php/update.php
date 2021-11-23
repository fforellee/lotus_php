<?php
include("conexao.php");

session_start();


$cpf = $_SESSION['CPF'];
$nome = $_POST['Nome_Completo'];

$data = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['Data_nascimento'])));
$data_nascimento = $data;

$CPF = $_POST['CPF'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];
$endereco_cep = $_POST['Endereço_CEP'];
$endereco_num_residencia = $_POST['Endereço_Num_residencia'];
$endereco_logradouro = $_POST['Endereço_Logradouro'];
$endereco_complemento = $_POST['Endereço_Complemento'];

$update = "UPDATE cliente SET Nome_completo='$nome',Data_Nascimento = '$data_nascimento', CPF = '$CPF', Email ='$email',Senha='$senha',Endereço_CEP ='$endereco_cep',Endereço_Logradouro = '$endereco_logradouro',Endereço_Num_residencia = '$endereco_num_residencia',Endereço_Complemento='$endereco_complemento' WHERE CPF='$cpf'";

mysqli_query($conn,$update);
?>