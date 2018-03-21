<?php
// Incluir aquivo de conex�o
include("conect.php");
 
// Recebe a id enviada no m�todo GET
$id = $_GET['id'];
 
// Seleciona o numero que tem essa ID
 $sql = mysql_query("SELECT * FROM whats WHERE numero LIKE '%".$valor."%'")or die('Erro: ' . mysql_error());

// Pega os dados e armazena em uma vari�vel
$numero = mysql_fetch_object($sql);
 
// Exibe o conte�do da notica
echo $numero->nome_r;
 
// Acentua��o
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>