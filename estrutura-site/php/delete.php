<?php
include("conexao.php");

$CPF = $_SESSION['CPF'];

$delete = "ALTER TABLE cliente DROP COLUMN Endereço_CEP,Endereço_Logradouro,Endereço_Num_residencia,Endereço_Complemento WHERE CPF = '".$CPF."'";

mysqli_query($conn,delete);
?>