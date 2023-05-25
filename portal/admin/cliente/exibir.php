<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente ORDER BY codigo_cliente ASC");
				
	
		if (mysqli_num_rows($select_cliente) > 0) {
			
			$dados_cliente = mysqli_fetch_assoc($select_cliente);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CLIENTES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cliente';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>CLIENTES CADASTRADOS</h1></div>

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

						<td><?php echo $dados_cliente['codigo_cliente'];?></td>
						<td><?php echo $dados_cliente['nome'];?></td>
						<td><?php echo $dados_cliente['cpf'];?></td>
						<td>

							<a href="editar.php?codigo_cliente=<?php echo $dados_cliente['codigo_cliente'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_cliente['codigo_cliente'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_cliente = mysqli_fetch_assoc($select_cliente));?>

				</table>

		</div>

</body>

</html>