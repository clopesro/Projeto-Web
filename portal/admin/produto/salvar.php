<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_produto'])) {

		$codigo_produto = $_POST['codigo_produto'];      
		$descricao = $_POST['descricao'];
		$estoque_inicial = $_POST['estoque_inicial'];
		$estoque_atual = $_POST['estoque_atual'];
		$fornecedor = $_POST['fornecedor'];
		$preco_compra = $_POST['preco_compra'];
		$preco_venda = $_POST['preco_venda'];



		$update_produto = "UPDATE produto SET descricao = '".$descricao."' WHERE codigo_produto = $codigo_produto";

		$update_produto = "UPDATE produto SET estoque_inicial = '".$estoque_inicial."' WHERE codigo_produto = $codigo_produto";

		$update_produto = "UPDATE produto SET estoque_atual = '".$estoque_atual."' WHERE codigo_produto = $codigo_produto";
	

		$update_produto = "UPDATE produto SET fornecedor = '".$fornecedor."' WHERE codigo_produto = $codigo_produto";
	

		$update_produto = "UPDATE produto SET preco_compra = '".$preco_compra."' WHERE codigo_produto = $codigo_produto";

		$update_produto = "UPDATE produto SET preco_venda = '".$preco_venda."' WHERE codigo_produto = $codigo_produto";
	

			
		if (mysqli_query($conexao,$update_produto)) {

				mysqli_close($conexao);

				echo "<script> alert ('PRODUTO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/produto/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/produto';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['descricao'])) {      
	
		
		$descricao = $_POST['descricao'];
		$estoque_inicial = $_POST['estoque_inicial'];
		$estoque_atual = $_POST['estoque_atual'];
		$fornecedor = $_POST['fornecedor'];
		$preco_compra = $_POST['preco_compra'];
		$preco_venda = $_POST['preco_venda'];



		$insert_produto = "INSERT INTO produto (descricao, estoque_inicial, estoque_atual, fornecedor, preco_compra, preco_venda) VALUES ('".$descricao."', '".$estoque_inicial."', '".$estoque_atual."', '".$fornecedor."', '".$preco_compra."', '".$preco_venda."')";
	
	
		if (mysqli_query($conexao,$insert_produto)) {

				mysqli_close($conexao);

				echo "<script> alert ('PRODUTO CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/produto/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/produto';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>