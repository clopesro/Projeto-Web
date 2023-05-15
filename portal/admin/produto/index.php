<?php require('../topo_admin.php');?>



	<form id="form_item" name="form_item" method="post" action="salvar.php" class="form_item">

			<div><h1>CADASTRAR PRODUTO</h1></div>

				<div class="agrupamento_produto">

						<div>

							<div><label>Código do Produto</label></div>	
							<div><input type="text" id="codigo_produto" name="codigo_produto" required autofocus></div>

							<div><label>Descrição</label></div>
							<div><input type="text" id="nome" name="nome" required autofocus></div>


							<div><label>Estoque Inicial</label></div>
							<div><input type="text" id="estoque_inicial" name="estoque_inicial" required autofocus></div>

							<div><label>Estoque Atual</label></div>
							<div><input type="text" id="estoque_atual" name="estoque_atual" required autofocus></div>

							<div><label>Fornecedor</label></div>
							<div><input type="text" id="fornecedor" name="fornecedor" required autofocus></div>

							<div><label>Preço de Compra</label></div>
							<div><input type="text" id="preco_compra" name="preco_compra" required autofocus></div>

							<div><label>Preço de Venda</label></div>
							<div><input type="text" id="preco_venda" name="preco_venda" required autofocus></div>

						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>

