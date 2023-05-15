<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_cliente = $_GET['codigo_cliente'];


	$select_cliente = mysqli_query($conexao, "SELECT * FROM cliente WHERE codigo_cliente = $codigo_cliente");
				
	
		if (mysqli_num_rows($select_cliente) > 0) {
			
			$dados_cliente = mysqli_fetch_assoc($select_cliente);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CLIENTES CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/cliente';</script>";
			
			
		}
	

?>


		<form id="form_cliente" name="form_cliente" method="post" action="salvar.php" class="form_cliente">

			<div><h1>ATUALIZAR CLIENTES</h1></div>

				<div class="agrupamento_cliente">

						<div>
							<div><label>Código</label></div>	

							<div><input type="text" id="codigo_cliente" name="codigo_cliente" value="<?php echo $dados_cliente['codigo_cliente'];?>" readonly></div>

						</div>

						<div>
							<div><label>Nome</label></div>	

							<div><input type="text" id="nome" name="nome" value="<?php echo $dados_cliente['nome'];?>" required autofocus></div>

							<div><input type="text" id="cpf" name="cpf" value="<?php echo $dados_cliente['nome'];?>" required autofocus></div>

						</div>	

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>