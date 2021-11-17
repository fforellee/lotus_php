<?php 
    //include  (../php/conexao.php);
    $servidor = "localhost"; //Utilização do banco de forma local
    $usuario = "root"; 
    $senha = "";
    $dbname = "mercadinho";   

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);   

    // Seleciona todos os registros da tabela:
    $result = mysqli_query($conn, "SELECT * FROM cliente"); //

    // Retorna todos os registros:
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Escreve o resultado JSON em arquivo:
    file_put_contents("Json_Cliente.json", json_encode($data));

?>