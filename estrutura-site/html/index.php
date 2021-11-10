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
			if(isset($_POST['acao'])) {
				$log = 'saul@123';
				$sen = '123';
				$senFor = $_POST["senhaLogin"];
				$logFor = $_POST['emailLogin'];				
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
			include('horti.html');
		}
	?>
</body>
</html>