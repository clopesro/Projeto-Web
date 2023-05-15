<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_item = $_GET['codigo_item'];


	$select_item = mysqli_query($conexao, "SELECT * FROM item WHERE codigo_item = $codigo_item");
				
	
		if (mysqli_num_rows($select_item) > 0) {
			
			$dados_item = mysqli_fetch_assoc($select_item);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM ITENS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/item';</script>";
			
			
		}
	

?>


		<form id="form_item" name="form_item" method="post" action="salvar.php" class="form_item">

			<div><h1>ATUALIZAR ITEM</h1></div>

				<div class="agrupamento_item">

						<div>
							<div><label>Código do Item</label></div>	

							<div><input type="text" id="codigo_item" name="codigo_item" value="<?php echo $dados_item['codigo_item'];?>" readonly></div>

						</div>

						<div>
							<div><label>Descrição do Item</label></div>	

							<div><input type="text" id="descricao" name="descricao" value="<?php echo $dados_item['item'];?>" required autofocus></div>

						</div>	

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>