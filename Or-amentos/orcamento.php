<table>
	<tr><th>Quantidade</th><th>Produto</th><th>Valor Unidade</th><th>Valor Total</th></tr>
		<?php
		extract($_POST);
		for ($i=0;$i<=count($quantidade)-1;$i++){ ?>	
			<tr><td><?=$quantidade[$i]?></td>
			<td><?=$produto[$i]?></td>
			<td><?=$valor[$i]?></td>
			<?php
			$subtotal=$valor[$i]*$quantidade[$i]
			?>
			<td><?=$subtotal?></td></tr>
		<?php 
		$total+=$subtotal;
		} ?>
</table>
<span id="total"><?="TOTAL: R$".$total?></span>
<br>
<div id="messages">
	<?php 
		if(mail($_SESSION['user'], 'Orçamento', 'TOTAL:'.$total))
			echo "Orçamento enviado com sucesso para R$ {$total} !";
		else 
			echo "Orçamento não pode ser enviado para o email. Verifique as configurações da função MAIL no PHP.INI!";
	?>
</div>