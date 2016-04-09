<?php

	if(isset($_POST['fala'])) {
    $fala_comigo = $_POST['fala'];

    //conversa que será enviada
    $conversa = "<div style=\"text-align:left;\">";
    $conversa .= "<strong>User:</strong> $fala_comigo";
    $conversa .= "</div>";

    //gravando no arquivo de conversa
    $arquivo = fopen("conversa.html", "a");
    fwrite($arquivo, $conversa);
    fclose($arquivo);

    //retorna para o index
    echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\">"; 
  } else {
    header("Location: index.php");
  }

?>