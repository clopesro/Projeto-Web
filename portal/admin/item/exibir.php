<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_item = mysqli_query($conexao, "SELECT * FROM item ORDER BY codigo_item ASC");
				
	
		if (mysqli_num_rows($select_item) > 0) {
			
			$dados_item = mysqli_fetch_assoc($select_item);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM itens CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/item';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>ITENS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO DO ITEM</td>
						<td>DESCRIÇÃO</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_item['codigo_item'];?></td>
						<td><?php echo $dados_item['descricao'];?></td>
						<td>

							<a href="editar.php?codigo_item=<?php echo $dados_item['codigo_item'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_item['codigo_item'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_item = mysqli_fetch_assoc($select_item));?>

				</table>

		</div>

</body>

</html>