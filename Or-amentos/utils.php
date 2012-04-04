<?php
function criaChaveSessao (){
	session_start();
		return $_SESSION['user'].date("y-m-d");
}

function validaChaveSessao (){
	session_start();	
		if(!$_SESSION['auth'] == $_SESSION['user'].date("y-m-d")){
			die("<script>window.location='index.php';</script> 
					Você não está logado ou sua sessãoo expirou!!");
		}
}	