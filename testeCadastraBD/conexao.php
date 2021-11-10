<?php
    $servidor = "localhost"; //Utilização do banco de forma local
    $usuario = "root"; 
    $senha = "";
    $dbname = "bdpaia";

    // cria a conexão com o banco
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>