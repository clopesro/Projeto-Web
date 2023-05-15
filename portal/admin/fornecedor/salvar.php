<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_fornecedor'])) {

		$codigo_fornecedor = $_POST['codigo_fornecedor'];      
	
		$nome= $_POST['nome'];


		$update_fornecedor = "UPDATE fornecedor SET nome = '".$nome."' WHERE codigo_fornecedor = $codigo_fornecedor";
	
	
		if (mysqli_query($conexao,$update_fornecedor)) {

				mysqli_close($conexao);

				echo "<script> alert ('FORNECEDOR ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/fornecedor/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/fornecedor';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['nome'])) {      
	
		$nome = $_POST['nome'];


		$insert_fornecedor = "INSERT INTO fornecedor (nome) VALUES ('".$nome."')";
	
	
		if (mysqli_query($conexao,$insert_fornecedor)) {

				mysqli_close($conexao);

				echo "<script> alert ('FORNECEDOR CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/fornecedor/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/fornecedor';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>