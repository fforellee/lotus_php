<?php
    include("conexao.php");

    $sql = 'INSERT INTO ';

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    while ($dados = mysqli_fetch_object($result)) {
        echo "<componente> $_produto";
    }
?>