<?php 
	session_start();

	include("../php/conexao.php");

	if(!isset($_SESSION['login'])) {

		if(isset($_POST['acao'])) {
			$senFor = $_POST["senhaLogin"];
			$logFor = $_POST['emailLogin'];				

			// $sql = 'SELECT * FROM cliente WHERE Email ='.$logFor.'AND'.'Senha ='.$senFor;

			$sql = 'SELECT * FROM cliente WHERE Email'.$logFor;
			$result = mysqli_query($conn, $sql); 
			$dados = mysqli_fetch_object($result);

			if($logFor == $dados->Email && $senFor == $dados->Senha ){
				$_SESSION['login'] = true;
				$_SESSION['CPF'] = $dados->CPF;
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