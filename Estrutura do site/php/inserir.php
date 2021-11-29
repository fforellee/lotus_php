<?php
    include("conexao.php");

    session_start();

    $cpf = $_SESSION['CPF'];

    $endereco_cep = $_POST['Endereço_CEP'];
    $endereco_num_residencia = $_POST['Endereço_Num_residencia'];
    $endereco_logradouro = $_POST['Endereço_Logradouro'];
    $endereco_complemento = $_POST['Endereço_Complemento'];


    $insert = "UPDATE cliente SET Endereço_CEP='$endereco_cep',Endereço_Logradouro='$endereco_logradouro',Endereço_Num_residencia='$endereco_num_residencia',Endereço_Complemento='$endereco_complemento' WHERE CPF ='$cpf'";

    if(mysqli_query($conn,$insert)){
        echo "true";
    }else{
        echo "false";
    }
?>