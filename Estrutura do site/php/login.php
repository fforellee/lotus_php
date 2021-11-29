<?php 
	session_start();

	include("../php/conexao.php");

	if(!isset($_SESSION['login'])) {

		if(isset($_POST['acao'])) {
			$senFor = $_POST["senhaLogin"];
			$logFor = $_POST['emailLogin'];				

			$sql = "SELECT * FROM cliente WHERE Email ='".$logFor."'";
			$result = mysqli_query($conn, $sql); 
			$dados = mysqli_fetch_object($result);

			if($logFor == $dados->Email && $senFor == $dados->Senha ){
				$_SESSION['login'] = true;
				$_SESSION['CPF'] = $dados->CPF;
				// -- criação do json
				$result = mysqli_query($conn, "SELECT * FROM cliente"); 
    			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    			file_put_contents("../json/cliente.json", json_encode($data));
				// -------------------
				header('Location: ../html/horti.php');
			}			
		}
	}else{
		if(isset($_GET['logout'])){
			unset($_SESSION['login']);
			session_destroy();
			header('Location: ../horti.php');
		}
	}
?>