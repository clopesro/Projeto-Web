<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_produto = $_GET['codigo_produto'];


	$select_produto = mysqli_query($conexao, "SELECT * FROM produto WHERE codigo_produto = $codigo_produto");
				
	
		if (mysqli_num_rows($select_produto) > 0) {
			
			$dados_produto = mysqli_fetch_assoc($select_produto);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM PRODUTOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/produto';</script>";
			
			
		}
	

?>


		<form id="form_produto" name="form_produto" method="post" action="salvar.php" class="form_produto">

			<div><h1>ATUALIZAR PRODUTO</h1></div>

				<div class="agrupamento_produto">

						<div>
							<div><label>Código</label></div>	

							<div><input type="text" id="codigo_produto" name="codigo_produto" value="<?php echo $dados_produto['codigo_produto'];?>" readonly></div>

						</div>

						<div>
							<div><label>Descrição</label></div>	

							<div><input type="text" id="descricao" name="descricao" value="<?php echo $dados_produto['descricao'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Estoque Inicial</label></div>	

							<div><input type="text" id="estoque_inicial" name="estoque_inicial" value="<?php echo $dados_produto['estoque_inicial'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Estoque Atual</label></div>	

							<div><input type="text" id="estoque_atual" name="estoque_atual" value="<?php echo $dados_produto['estoque_atual'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Fornecedor</label></div>	

							<div><input type="text" id="fornecedor" name="fornecedor" value="<?php echo $dados_produto['fornecedor'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Preço de Compra</label></div>	

							<div><input type="text" id="preco_compra" name="preco_compra" value="<?php echo $dados_produto['preco_compra'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Preço de Venda</label></div>	

							<div><input type="text" id="preco_venda" name="preco_venda" value="<?php echo $dados_produto['preco_venda'];?>" required autofocus></div>

						</div>			
				
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>