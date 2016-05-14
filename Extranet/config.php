<?php
session_start();

if ($_SESSION['logado'] != "yeye") {
  header("Location: login.php");
}