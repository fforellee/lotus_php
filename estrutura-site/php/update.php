<?php
include("conexao.php");

// if($_POST['Nome_completo'] == ''){$nome = $dados->Nome_completo;}else{$nome = $_POST['Nome_completo'];}
// if($_POST['Data_nascimento'] == ''){$data_nascimento = $dados->Data_nascimento;}else{$data_nascimento = $_POST['Data_nascimento'];}
// if($_POST['CPF'] == ''){$CPF = $dados->CPF;}else{$CPF = $_POST['CPF'];}
// if($_POST['Email'] == ''){$email = $dados->Email;}else{$email = $_POST['Email'];}
// if($_POST['Senha'] == ''){$senha = $dados->Senha;}else{$senha = $_POST['Senha'];}
// if($_POST['Endereço_CEP'] == ''){$CEP = $dados->Endereço_CEP;}else{$CEP = $_POST['Endereço_CEP'];}


// $update = "UPDATE cliente SET Nome_Completo ='".$nome."',".
//                         "Data_Nascimento ='".$data_nascimento."',".
//                         "CPF ='".$CPF."',".  
//                         "Email ='".$email."',".
//                         "Senha ='".$senha."',".  
//                         "CEP ='".$CEP."',".
//                         "Endereço_Logradouro ='".$_POST['Endereço_Logradouro']."',".
//                         "Endereço_Num_residencia ='".$_POST['Endereço_Num_residencia ']."',".
//                         "Endereço_Logradouro ='".$_POST['Endereço_Logradouro ']."'".
//                         "WHERE CPF ='".$_SESSION['CPF']."'";



$update = "UPDATE cliente  SET Nome_completo = '".$nome."'";

if(mysqli_query($conn,$update)){
    echo "true";
}else{
    echo "false";
}

?>