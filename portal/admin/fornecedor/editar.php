<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_fornecedor = $_GET['codigo_fornecedor'];


	$select_fornecedor = mysqli_query($conexao, "SELECT * FROM fornecedor WHERE codigo_fornecedor = $codigo_fornecedor");
				
	
		if (mysqli_num_rows($select_fornecedor) > 0) {
			
			$dados_fornecedor = mysqli_fetch_assoc($select_fornecedor);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM FORNECEDORES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/fornecedor';</script>";
			
			
		}
	

?>


		<form id="form_fornecedor" name="form_fornecedor" method="post" action="salvar.php" class="form_fornecedor">

			<div><h1>ATUALIZAR FORNECEDOR</h1></div>

				<div class="agrupamento_fornecedor">

						<div>
							<div><label>Código do fornecedor</label></div>	

							<div><input type="text" id="codigo_fornecedor" name="codigo_fornecedor" value="<?php echo $dados_fornecedor['codigo_fornecedor'];?>" readonly></div>

						</div>

						<div>
							<div><label>Nome do fornecedor</label></div>	

							<div><input type="text" id="nome" name="nome" value="<?php echo $dados_fornecedor['nome'];?>" required autofocus></div>

							<div><input type="text" id="cnpj" name="cnpj" value="<?php echo $dados_fornecedor['cnpj'];?>" required autofocus></div>

							<div><input type="text" id="telefone" name="telefone" value="<?php echo $dados_fornecedor['telefone'];?>" required autofocus></div>

							<div><input type="text" id="endereco" name="endereco" value="<?php echo $dados_fornecedor['endereco'];?>" required autofocus></div>

							<div><input type="text" id="email" name="email" value="<?php echo $dados_fornecedor['email'];?>" required autofocus></div>

						</div>	

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>