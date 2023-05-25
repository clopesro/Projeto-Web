<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_pedido = $_GET['codigo_pedido'];


	$select_pedido = mysqli_query($conexao, "SELECT * FROM pedido WHERE codigo_pedido = $codigo_pedido");
				
	
		if (mysqli_num_rows($select_pedido) > 0) {
			
			$dados_pedido = mysqli_fetch_assoc($select_pedido);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM PEDIDOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/pedido';</script>";
			
			
		}
	

?>


		<form id="form_pedido" name="form_pedido" method="post" action="salvar.php" class="form_pedido">

			<div><h1>ATUALIZAR PEDIDO</h1></div>

				<div class="agrupamento_pedido">

						<div>
							<div><label>Código</label></div>	

							<div><input type="text" id="codigo_pedido" name="codigo_pedido" value="<?php echo $dados_pedido['codigo_pedido'];?>" readonly></div>

						</div>

						<div>
							<div><label>Descrição</label></div>	

							<div><input type="text" id="descricao" name="descricao" value="<?php echo $dados_pedido['descricao'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Quantidade</label></div>	

							<div><input type="text" id="quantidade" name="quantidade" value="<?php echo $dados_pedido['quantidade'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Data da Compra</label></div>	

							<div><input type="date" id="data_compra" name="data_compra" value="<?php echo $dados_pedido['data_compra'];?>" required autofocus></div>

						</div>	

						

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>