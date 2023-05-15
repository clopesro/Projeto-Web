<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_fornecedor = mysqli_query($conexao, "SELECT * FROM fornecedor ORDER BY codigo_fornecedor ASC");
				
	
		if (mysqli_num_rows($select_fornecedor) > 0) {
			
			$dados_fornecedor = mysqli_fetch_assoc($select_fornecedor);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM FORNECEDORES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/fornecedor';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>FORNECEDORES CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO DO FORNECEDOR</td>
						<td>NOME DO FORNECEDOR</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_fornecedor['codigo_fornecedor'];?></td>
						<td><?php echo $dados_fornecedor['nome'];?></td>
						<td>

							<a href="editar.php?codigo_fornecedor=<?php echo $dados_fornecedor['codigo_fornecedor'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_fornecedor['codigo_fornecedor'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_fornecedor = mysqli_fetch_assoc($select_fornecedor));?>

				</table>

		</div>

</body>

</html>