<?php
function criaChaveSessao (){
	session_start();
		return $_SESSION['user'].date("y-m-d");
}

function validaChaveSessao (){
	session_start();	
		if(!$_SESSION['auth'] == $_SESSION['user'].date("y-m-d")){
			die("<script>window.location='index.php';</script> 
					Voc� n�o est� logado ou sua sess�oo expirou!!");
		}
}	