<?php
session_start();

if($_GET['acao'] == 'addCampo')
	$_SESSION['quantidade_itens']+=1;
else if ($_GET['acao'] == 'rmCampo')
	$_SESSION['quantidade_itens']-=1;

if($_SESSION['quantidade_itens'] == null and $_SESSION['quantidade_itens'] == null)
	$_SESSION['quantidade_itens']=1;
else if ($_SESSION['quantidade_itens'] == null)
	$_SESSION['quantidade_itens']=$_GET['itens'];

if($_GET['acao'] == 'sair'){
	$_SESSION['auth']=null;
	unset($_SESSION['auth']);
	echo "<script>window.location='index.php';</script> ";
}
	