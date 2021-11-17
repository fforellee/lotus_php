<?php 
session_start();

if (!isset($_SESSION['login'])) {
    session_destroy();
    header('Location: ../html/index.php');
  }

session_destroy();
header('Location: ../html/index.php');
?>