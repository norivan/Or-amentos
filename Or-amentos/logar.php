<?php

require_once 'utils.php';

/* Resgata todos os campos de um formul�rios transformando 
   o nome do campo em vari�vel */
extract($_POST);


// Valida dados, cria sessao e redireciona
if($login == "norivan@gmail.com" and $senha=="123"){

	session_start();
		$_SESSION['user']=$login;
		$_SESSION['auth']=criaChaveSessao();
		echo "<script>window.location='pedidos.php';</script>";
}