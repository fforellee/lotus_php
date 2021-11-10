<?php
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);

    $res_Usu = "INSERT INTO alunos (Nome, Idade, ct) VALUES ('$nome','$idade',Now())";    
    $resultado_Usu = mysqli_query($conn, $res_Usu);

    include_once("informaProduto.php")
?>