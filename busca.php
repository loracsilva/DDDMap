<?php
// Incluir aquivo de conexão
include("conect.php");

// Recebe o valor enviado
$valor = $_GET['valor'];

//total de clientes
if($valor == 'total'){
  $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}

//estados e dds
if($valor == 'state_rn') {   
 //84
 //Rio grande do Norte         
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(84)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_pb') {   
 //83
 //Paraiba                     
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(83)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_al') {   
 //82
 //Alagoas                     
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(82)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_se') {   
 //79
 //Sergipe                     
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(79)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_to') {   
 //63
 //Tocantins                   
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(63)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ap') {   
 //96
 //Amapá                       
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(96)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_rr') {   
 //95
 //Roraima                     
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(95)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ac') {   
 //68
 //Acre                        
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(68)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ro') {   
 //69
 //Rondônia                    
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(69)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ms') {   
 //67
 //Mato Grosso do Sul          
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(67)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_pe') {   
 //81
 //Pernanbuco                  
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(81)%' OR ".$nome_coluna_telefone." LIKE '%(87)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_pi') {   
 //86
 //Piaui                       
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(86)%' OR ".$nome_coluna_telefone." LIKE '%(89)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ce') {   
 //85
 //Ceara                       
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(85)%' OR ".$nome_coluna_telefone." LIKE '%(88)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_am') {   
 //92
 //Amazonas                    
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(92)%' OR ".$nome_coluna_telefone." LIKE '%(97)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_es') {   
 //27
 //Espirito Santo              
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(27)%' OR ".$nome_coluna_telefone." LIKE '%(28)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_mt') {   
 //65
 //Mato Grosso                 
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(65)%' OR ".$nome_coluna_telefone." LIKE '%(67)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ma') {   
 //98
 //Maranhão                    
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(98)%' OR ".$nome_coluna_telefone." LIKE '%(99)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_pa') {   
 //91
 //Pará                        
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(91)%' OR ".$nome_coluna_telefone." LIKE '%(93)%' OR ".$nome_coluna_telefone." LIKE '%(94)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_rj') {   
 //21
 //Rio de Janeiro              
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(21)%' OR ".$nome_coluna_telefone." LIKE '%(22)%' OR ".$nome_coluna_telefone." LIKE '%(24)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_sc') {   
 //47
 //Santa Catarina              
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(47)%' OR ".$nome_coluna_telefone." LIKE '%(48)%' OR ".$nome_coluna_telefone." LIKE '%(49)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_df') {   
 //61
 //DF                          
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(61)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_go') {   
 //62
 //Goias                       
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(62)%' OR ".$nome_coluna_telefone." LIKE '%(64)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_rs') {   
 //51, 55
 //Rio Grande do Sul   
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(51)%' OR ".$nome_coluna_telefone." LIKE '%(53)%' OR ".$nome_coluna_telefone." LIKE '%(54)%' OR ".$nome_coluna_telefone." LIKE '%(55)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_ba') {   
 //71, 75, 77
 //Bahia               
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(71)%' OR ".$nome_coluna_telefone." LIKE '%(73)%' OR ".$nome_coluna_telefone." LIKE '%(74)%' OR ".$nome_coluna_telefone." LIKE '%(75)%' OR ".$nome_coluna_telefone." LIKE '%(77)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_pr') {   
 //41, 44, 45, 46                  
 //Paraná              
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(41)%' OR ".$nome_coluna_telefone." LIKE '%(42)%' OR ".$nome_coluna_telefone." LIKE '%(43)%' OR ".$nome_coluna_telefone." LIKE '%(44)%' OR ".$nome_coluna_telefone." LIKE '%(45)%' OR ".$nome_coluna_telefone." LIKE '%(46)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_mg') {   
 //31, 34, 35, 37, 38              
 //Minas Gerais        
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(31)%' OR ".$nome_coluna_telefone." LIKE '%(32)%' OR ".$nome_coluna_telefone." LIKE '%(33)%' OR ".$nome_coluna_telefone." LIKE '%(34)%' OR ".$nome_coluna_telefone." LIKE '%(35)%' OR ".$nome_coluna_telefone." LIKE '%(37)%' OR ".$nome_coluna_telefone." LIKE '%(38)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}
if($valor == 'state_sp') {   
 //11, 14, 15, 16, 17, 18, 19      
 //São Paulo           
 $query = "SELECT * FROM ". $tabela_telefone ." WHERE ".$nome_coluna_telefone." LIKE '%(11)%' OR ".$nome_coluna_telefone." LIKE '%(12)%' OR ".$nome_coluna_telefone." LIKE '%(13)%' OR ".$nome_coluna_telefone." LIKE '%(14)%' OR ".$nome_coluna_telefone." LIKE '%(15)%' OR ".$nome_coluna_telefone." LIKE '%(16)%' OR ".$nome_coluna_telefone." LIKE '%(17)%' OR ".$nome_coluna_telefone." LIKE '%(18)%' OR ".$nome_coluna_telefone." LIKE '%(19)%' AND ".$nome_coluna_cliente." = '".$nome_cliente."' ";
}

 $sql = mysql_query($query)or die('Erro: ' . mysql_error());
 
// Exibe todos os valores encontrados
$count = 0;
while ($numero = mysql_fetch_object($sql)) {
 $count++;
}
echo $count;

// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>
