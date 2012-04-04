<?php
require_once 'utils.php';
require_once 'actions.php';
validaChaveSessao (); // restringe o acesso
?>

<table id="topo">
	<tr><td id="title">Pedidos</td>
		<td id="userMSG">Olá <?=$_SESSION['user']?> <a href="<?=$_SERVER['PHP_SELF'].'?acao=sair'?>">[LOGOFF]</a></td></tr>
</table>

<form id="pedidos" action="orcamento.php" method="post">
	<table id="pedidos">
		<tr><th>Quantidade</th><th>Produto</th><th>Valor</th></tr>
	
		<?php for ($i=1;$i<=$_SESSION['quantidade_itens'];$i++){ ?>	
			<tr><td><input type="text" name="quantidade[]" size="2" maxlength="2" ></td>
			<td><input type="text" name="produto[]" size="30" maxlength="30"></td>
			<td><input type="text" name="valor[]" size="8" maxlength="8"></td></tr>
			<?php } ?>
		
	</table>
	<input type="submit" class=".bigButton" value="Efetuar pedido">
</form>
<a href="<?=$_SERVER['PHP_SELF'].'?acao=addCampo'?>">[+]</a> <a href="<?=$_SERVER['PHP_SELF'].'?acao=rmCampo'?>">[-]</a>