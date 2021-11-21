<?php
include("../php/conexao.php");
$update = "UPDATE cliente SET Nome_Completo ='".$_POST['Nome_Completo']."',".
                        "Data_Nascimento ='".$_POST['Data_Nascimento']."',".
                        "CPF ='".$_POST['CPF']."',".  
                        "Email ='".$_POST['Email']."',".
                        "Senha ='".$_POST['Senha']."',".  
                        "CEP ='".$_POST['CEP']."',".
                        "Endereço_Logradouro ='".$_POST['Endereço_Logradouro']."',".
                        "Endereço_Num_residencia ='".$_POST['Endereço_Num_residencia ']."',".
                        "Endereço_Logradouro ='".$_POST['Endereço_Logradouro ']."'".
                        "WHERE CPF ='".$_SESSION['CPF']."'";

if(mysqli_query($conn,$update)){
    echo "true";
}else{
    echo "false";
}
//INSERT INTO cliente (CPF,Nome_completo,Email,Senha) VALUES(48484848,"teste","teste@gmail.com","teste")

?>