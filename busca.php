<?php
// Incluir aquivo de conexão
include("conect.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
// echo $valor;

if($valor == 'state_rn') {   
 //84
 //Rio grande do Norte         
 $query = "SELECT * FROM whats WHERE numero LIKE '%(84)%'";
}
if($valor == 'state_pb') {   
 //83
 //Paraiba                     
 $query = "SELECT * FROM whats WHERE numero LIKE '%(83)%'";
}
if($valor == 'state_al') {   
 //82
 //Alagoas                     
 $query = "SELECT * FROM whats WHERE numero LIKE '%(82)%'";
}
if($valor == 'state_se') {   
 //79
 //Sergipe                     
 $query = "SELECT * FROM whats WHERE numero LIKE '%(79)%'";
}
if($valor == 'state_to') {   
 //63
 //Tocantins                   
 $query = "SELECT * FROM whats WHERE numero LIKE '%(63)%'";
}
if($valor == 'state_ap') {   
 //96
 //Amapá                       
 $query = "SELECT * FROM whats WHERE numero LIKE '%(96)%'";
}
if($valor == 'state_rr') {   
 //95
 //Roraima                     
 $query = "SELECT * FROM whats WHERE numero LIKE '%(95)%'";
}
if($valor == 'state_ac') {   
 //68
 //Acre                        
 $query = "SELECT * FROM whats WHERE numero LIKE '%(68)%'";
}
if($valor == 'state_ro') {   
 //69
 //Rondônia                    
 $query = "SELECT * FROM whats WHERE numero LIKE '%(69)%'";
}
if($valor == 'state_ms') {   
 //67
 //Mato Grosso do Sul          
 $query = "SELECT * FROM whats WHERE numero LIKE '%(67)%'";
}
if($valor == 'state_pe') {   
 //81
 //Pernanbuco                  
 $query = "SELECT * FROM whats WHERE numero LIKE '%(81)%' OR numero LIKE '%(87)%'";
}
if($valor == 'state_pi') {   
 //86
 //Piaui                       
 $query = "SELECT * FROM whats WHERE numero LIKE '%(86)%' OR numero LIKE '%(89)%'";
}
if($valor == 'state_ce') {   
 //85
 //Ceara                       
 $query = "SELECT * FROM whats WHERE numero LIKE '%(85)%' OR numero LIKE '%(88)%'";
}
if($valor == 'state_am') {   
 //92
 //Amazonas                    
 $query = "SELECT * FROM whats WHERE numero LIKE '%(92)%' OR numero LIKE '%(97)%'";
}
if($valor == 'state_es') {   
 //27
 //Espirito Santo              
 $query = "SELECT * FROM whats WHERE numero LIKE '%(27)%' OR numero LIKE '%(28)%'";
}
if($valor == 'state_mt') {   
 //65
 //Mato Grosso                 
 $query = "SELECT * FROM whats WHERE numero LIKE '%(65)%' OR numero LIKE '%(67)%'";
}
if($valor == 'state_ma') {   
 //98
 //Maranhão                    
 $query = "SELECT * FROM whats WHERE numero LIKE '%(98)%' OR numero LIKE '%(99)%'";
}
if($valor == 'state_pa') {   
 //91
 //Pará                        
 $query = "SELECT * FROM whats WHERE numero LIKE '%(91)%' OR numero LIKE '%(93)%' OR numero LIKE '%(94)%'";
}
if($valor == 'state_rj') {   
 //21
 //Rio de Janeiro              
 $query = "SELECT * FROM whats WHERE numero LIKE '%(21)%' OR numero LIKE '%(22)%' OR numero LIKE '%(24)%'";
}
if($valor == 'state_sc') {   
 //47
 //Santa Catarina              
 $query = "SELECT * FROM whats WHERE numero LIKE '%(47)%' OR numero LIKE '%(48)%' OR numero LIKE '%(49)%'";
}
if($valor == 'state_df') {   
 //61
 //DF                          
 $query = "SELECT * FROM whats WHERE numero LIKE '%(61)%'";
}
if($valor == 'state_go') {   
 //62
 //Goias                       
 $query = "SELECT * FROM whats WHERE numero LIKE '%(62)%' OR numero LIKE '%(64)%'";
}
if($valor == 'state_rs') {   
 //51
 //55                          Rio Grande do Sul   
 $query = "SELECT * FROM whats WHERE numero LIKE '%(51)%' OR numero LIKE '%(53)%' OR numero LIKE '%(54)%' OR numero LIKE '%(55)%'";
}
if($valor == 'state_ba') {   
 //71
 //75, 77                      Bahia               
 $query = "SELECT * FROM whats WHERE numero LIKE '%(71)%' OR numero LIKE '%(73)%' OR numero LIKE '%(74)%' OR numero LIKE '%(75)%' OR numero LIKE '%(77)%'";
}
if($valor == 'state_pr') {   
 //41
 //44, 45, 46                  Paraná              
 $query = "SELECT * FROM whats WHERE numero LIKE '%(41)%' OR numero LIKE '%(42)%' OR numero LIKE '%(43)%' OR numero LIKE '%(44)%' OR numero LIKE '%(45)%' OR numero LIKE '%(46)%'";
}
if($valor == 'state_mg') {   
 //31
 //34, 35, 37, 38              Minas Gerais        
 $query = "SELECT * FROM whats WHERE numero LIKE '%(31)%' OR numero LIKE '%(32)%' OR numero LIKE '%(33)%' OR numero LIKE '%(34)%' OR numero LIKE '%(35)%' OR numero LIKE '%(37)%' OR numero LIKE '%(38)%'";
}
if($valor == 'state_sp') {   
 //11
 //14, 15, 16, 17, 18, 19      São Paulo           
 $query = "SELECT * FROM whats WHERE numero LIKE '%(11)%' OR numero LIKE '%(12)%' OR numero LIKE '%(13)%' OR numero LIKE '%(14)%' OR numero LIKE '%(15)%' OR numero LIKE '%(16)%' OR numero LIKE '%(17)%' OR numero LIKE '%(18)%' OR numero LIKE '%(19)%'";
}

 $sql = mysql_query($query)or die('Erro: ' . mysql_error());
 
// Exibe todos os valores encontrados
//print_r($sql);
$count = 0;
while ($numero = mysql_fetch_object($sql)) {
	$count++;
	//echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$numero->id."')\"> <p>" . $numero->id . "</p> <p>" . $numero->nome_r . "</p> <p>" . $numero->numero . "</p> </a><br />";
}
//echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$valor."')\"> <p>" . $count . "</p> </a><br />";

echo $count;

// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>