<?php 
	session_start();
	if(!isset($_SESSION['login'])) {

		if(isset($_POST['acao'])) {
			$log = 'saul@123';
			$sen = '123';
			$senFor = $_POST["senhaLogin"];
			$logFor = $_POST['emailLogin'];				

			if($log == $logFor && $sen == $senFor){
				$_SESSION['login'] = true;
				header('Location: ../html/horti.php');
			}			

		}
	}else{
		if(isset($_GET['logout'])){
			unset($_SESSION['login']);
			session_destroy();
			header('Location: ../horti.php');
		}
		include('horti.html');
	}
?>