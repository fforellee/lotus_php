<?php
include("conexao.php");

session_start();

$cpf = $_SESSION['CPF'];


$delete = "UPDATE cliente SET Endereço_CEP='',Endereço_Logradouro='',Endereço_Num_residencia='',Endereço_Complemento='' WHERE CPF ='$cpf'";


if(mysqli_query($conn,$delete)){
    echo"true";
}else{
    echo"false";
}

?>