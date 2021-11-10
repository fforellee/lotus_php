<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<?php 
		if(!isset($_SESSION['login'])) {
			// vericação de acao como true; dps de ter passado por login.html
			if(isset($_POST['acao'])) {
				$log = 'gui';
				$sen = '123';
				$senFor = $_POST["senha"];
				$logFor = $_POST['login'];
				
				if($log == $logFor && $sen == $senFor){
					$_SESSION['login'] = true;
					header('Location: index.php');
				}			
			}
			include('login.html');
		}else{
			if(isset($_GET['logout'])){
				unset($_SESSION['login']);
				session_destroy();
				header('Location: index.php');
			}
			include('home.php');
		}
	?>
</body>
</html>
