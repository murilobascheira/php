<?php
	session_start();

if (!$_SESSION['contagem']) {
  $_SESSION['contagem'] =1 ;
}

echo "<h1>" .$_SESSION['contagem']."</h1>";
 $_SESSION['contagem'] ++ ;




?>