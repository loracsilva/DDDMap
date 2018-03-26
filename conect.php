<?php
error_reporting(E_ALL ^ E_DEPRECATED);
    //configurações de banco
    $host = "teste_diversos.mysql.dbaas.com.br:3306";
    $usuario = "teste_diversos";
    $senha = "teste123@";
    $banco = "teste_diversos";
    
    //configurações de tabelas
    $tabela_telefone = "whats";
    $nome_coluna_telefone = "numero";
    $nome_coluna_cliente = "user_cli";
    $nome_cliente = "User Teste";
    
    //conexão
    $conn = mysql_connect($host, $usuario, $senha)or die('Erro: ' . mysql_error());; 
    $db = mysql_select_db($banco,$conn)or die('Erro: ' . mysql_error());;
    if(!$conn){
        echo "erro ao conectar ao banco de dados!";
        exit();
    }
?>

