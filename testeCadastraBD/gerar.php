<?php
    $servidor = "localhost"; //Utilização do banco de forma local
    $usuario = "root"; 
    $senha = "";
    $dbname = "bdpaia";

    // cria a conexão com o banco
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('Erro de conexão');

    $sql = 'SELECT id, Nome, Idade, ct FROM alunos';
    //$sql  = 'SELECT * FROM alunos';
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $xml = "<?xml version='1.0' encoding='UTF-8'>";
    $xml .= '<alunos>';

    while ($dados = mysqli_fetch_object($result)) {
        $xml .='<bichos>';
        //$xml .='<id>'. $id->id.'</id>';
        $nome = $dados['Nome'];
        echo $nome;
        $xml .='<nombre>'. $dados->Nome.'</nombre>';
        $xml .='<idade>'. $dados->Idade.'</idade>';
        $xml .='<bomb>'. $dados->ct.'</bomb>';
        $xml .='</bichos>';
    }

    $xml .= '</alunos>';

    $arq = fopen('geraXML.xml', 'w+');
    $esc = fwrite($arq, $xml);
    fclose($arq);
?>