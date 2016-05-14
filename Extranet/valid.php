<?php
session_start();

$user = "gabriel";
$pass = "123";

$user_r = "";
if ($_POST['user']) {
  $user_r = $_POST['user'];
}

$pass_r = "";
if ($_POST['pass']) {
  $pass_r = $_POST['pass'];
}


if ($user == $user_r && $pass == $pass_r) {
  $_SESSION['logado'] = "yeye";
  header("Location: index.php");
} else {
  header("Location: login.php");
}
?>