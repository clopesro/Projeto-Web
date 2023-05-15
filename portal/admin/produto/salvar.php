<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_produto'])) {

		$codigo_produto = $_POST['codigo_produto'];      
	
		$descricao = $_POST['descricao'];


		$update_produto = "UPDATE produto SET descricao = '".$descricao."' WHERE codigo_produto = $codigo_produto";
	
	
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


		$insert_produto = "INSERT INTO produto (descricao) VALUES ('".$descricao."')";
	
	
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