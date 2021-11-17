<?php
    include("conexao.php");

    $sql = 'SELECT id, Nome, Idade, ct FROM produto';
    //$sql  = 'SELECT * FROM alunos';
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    while ($dados = mysqli_fetch_object($result)) {

    }



?>