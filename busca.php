<?php
// Incluir aquivo de conexão
include("conect.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
// $sql = mysqli_query("SELECT * FROM whats WHERE numero LIKE '%".$valor."%'");
 $sql = mysql_query("SELECT * FROM whats WHERE numero LIKE '%(".$valor.")%'")or die('Erro: ' . mysql_error());
 
// Exibe todos os valores encontrados
print_r($sql);

while ($numero = mysql_fetch_object($sql)) {
	echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$numero->id."')\"> <p>" . $numero->id . "</p> <p>" . $numero->nome_r . "</p> <p>" . $numero->numero . "</p> </a><br />";
}
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>