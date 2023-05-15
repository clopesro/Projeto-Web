<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_vendedor = $_GET['codigo_vendedor'];


	$select_vendedor = mysqli_query($conexao, "SELECT * FROM vendedor WHERE codigo_vendedor = $codigo_vendedor");
				
	
		if (mysqli_num_rows($select_vendedor) > 0) {
			
			$dados_vendedor = mysqli_fetch_assoc($select_vendedor);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM VENDEDORES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/vendedor';</script>";
			
			
		}
	

?>


		<form id="form_vendedor" name="form_vendedor" method="post" action="salvar.php" class="form_vendedor">

			<div><h1>ATUALIZAR VENDEDOR</h1></div>

				<div class="agrupamento_vendedor">

						<div>
							<div><label>Código do vendedor</label></div>	

							<div><input type="text" id="codigo_vendedor" name="codigo_vendedor" value="<?php echo $dados_vendedor['codigo_vendedor'];?>" readonly></div>

						</div>

						<div>
							<div><label>Nome do vendedor</label></div>	

							<div><input type="text" id="nome" name="nome" value="<?php echo $dados_vendedor['nome'];?>" required autofocus></div>

							<div><input type="text" id="cpf" name="cpf" value="<?php echo $dados_vendedor['nome'];?>" required autofocus></div>

						</div>	

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>