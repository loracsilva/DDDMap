var req;
window.onload = initPage;

function initPage() {
	var result = document.getElementById('resultado').textContent;
	
	if(result==""){
		buscaTotal();
	}
	$(".map").mouseover(function(){
		buscandoId();
	});
	 $(".map").mouseout(function () {
		buscaTotal();
	});

}

function buscandoId(){
	$(".state").mouseover(function () {
		console.log(this.id);
		buscarNumeros(this.id);
	});
}

function buscaTotal(){
	buscarNumeros('total');
}

// FUNÇÃO PARA BUSCA
function buscarNumeros(valor) {

//console.log(valor);

// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
 
// Arquivo PHP juntamente com o valor digitado no campo (método GET)
var url = "busca.php?valor="+valor;
 
// Chamada do método open para processar a requisição
req.open("Get", url, true); 
 
// Quando o objeto recebe o retorno, chamamos a seguinte função;
req.onreadystatechange = function() {
 
	// Exibe a mensagem "Buscando..." enquanto carrega
	if(req.readyState == 1) {
		document.getElementById('resultado').innerHTML = 'Buscando...';
	}
	
 
	// Verifica se o Ajax realizou todas as operações corretamente
	if(req.readyState == 4 && req.status == 200) {
 
	// Resposta retornada pelo busca.php
	var resposta = req.responseText;
	var texto3 = 'Temos ' + resposta + ' clientes em todo Brasil.';

	if(valor == 'total'){
		document.getElementById('resultado').innerHTML = texto3;
	}else{
		var estado = document.getElementById('label_' + valor).textContent;
		var texto1 = estado + ' - ' + resposta + ' cliente(s)';
		var texto2 = estado;
		
		if (resposta == 0) {
			document.getElementById('resultado').innerHTML = texto2;
		} else {
			document.getElementById('resultado').innerHTML = texto1;
		}
	}
		
 
	}
}
req.send(null);
}

