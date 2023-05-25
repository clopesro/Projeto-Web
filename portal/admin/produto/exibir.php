<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_produto = mysqli_query($conexao, "SELECT * FROM produto ORDER BY codigo_produto ASC");
				
	
		if (mysqli_num_rows($select_produto) > 0) {
			
			$dados_produto = mysqli_fetch_assoc($select_produto);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM PRODUTOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/produto';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>PRODUTOS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>DESCRIÇÃO</td>
						<td>ESTOQUE INICIAL</td>
						<td>ESTOQUE ATUAL</td>
						<td>FORNECEDOR</td>
						<td>PREÇO DE COMPRA</td>
						<td>PREÇO DE VENDA</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_produto['codigo_produto'];?></td>
						<td><?php echo $dados_produto['descricao'];?></td>
						<td><?php echo $dados_produto['estoque_inicial'];?></td>
						<td><?php echo $dados_produto['estoque_atual'];?></td>
						<td><?php echo $dados_produto['fornecedor'];?></td>
						<td><?php echo $dados_produto['preco_compra'];?></td>
						<td><?php echo $dados_produto['preco_venda'];?></td>
						<td>

							<a href="editar.php?codigo_produto=<?php echo $dados_produto['codigo_produto'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_produto['codigo_produto'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_produto = mysqli_fetch_assoc($select_produto));?>

				</table>

		</div>

</body>

</html>