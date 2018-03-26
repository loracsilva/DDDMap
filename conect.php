<?php
error_reporting(E_ALL ^ E_DEPRECATED);

    $host = "#";
    $usuario = "#";
    $senha = "#";
    $banco = "#";
   
 
    $conn = mysql_connect($host, $usuario, $senha)or die('Erro: ' . mysql_error());; 
    $db = mysql_select_db($banco,$conn)or die('Erro: ' . mysql_error());;
    if(!$conn)
    {
        echo "erro ao conectar ao banco de dados!";
        exit();
    }


?>

