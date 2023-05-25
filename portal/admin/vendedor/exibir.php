<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_vendedor = mysqli_query($conexao, "SELECT * FROM vendedor ORDER BY codigo_vendedor ASC");
				
	
		if (mysqli_num_rows($select_vendedor) > 0) {
			
			$dados_vendedor = mysqli_fetch_assoc($select_vendedor);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM VENDEDORES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/vendedor';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>VENDEDORES CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>NOME</td>
						<td>CPF</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_vendedor['codigo_vendedor'];?></td>
						<td><?php echo $dados_vendedor['nome'];?></td>
						<td><?php echo $dados_vendedor['cpf'];?></td>
						<td>

							<a href="editar.php?codigo_vendedor=<?php echo $dados_vendedor['codigo_vendedor'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_vendedor['codigo_vendedor'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_vendedor = mysqli_fetch_assoc($select_vendedor));?>

				</table>

		</div>

</body>

</html>