<?php
error_reporting(E_ALL ^ E_DEPRECATED);

    $host = "teste_diversos.mysql.dbaas.com.br:3306";
    $usuario = "teste_diversos";
    $senha = "teste123@";
    $banco = "teste_diversos";
   
 
    $conn = mysql_connect($host, $usuario, $senha)or die('Erro: ' . mysql_error());; 
    $db = mysql_select_db($banco,$conn)or die('Erro: ' . mysql_error());;
    if(!$conn)
    {
        echo "erro ao conectar ao banco de dados!";
        exit();
    }


?>

