<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_pedido = mysqli_query($conexao, "SELECT * FROM pedido ORDER BY codigo_pedido ASC");
				
	
		if (mysqli_num_rows($select_pedido) > 0) {
			
			$dados_pedido = mysqli_fetch_assoc($select_pedido);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM PEDIDOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/pedido';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>PEDIDOS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>DESCRIÇÃO</td>
						<td>DATA DA COMPRA</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_pedido['codigo_pedido'];?></td>
						<td><?php echo $dados_pedido['descricao'];?></td>
						<td><?php echo $dados_pedido['data_compra'];?></td>
						<td>

							<a href="editar.php?codigo_pedido=<?php echo $dados_pedido['codigo_pedido'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_pedido['codigo_pedido'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_pedido = mysqli_fetch_assoc($select_pedido));?>

				</table>

		</div>

</body>

</html>