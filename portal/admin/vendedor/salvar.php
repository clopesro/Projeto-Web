<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_vendedor'])) {

		$codigo_vendedor = $_POST['codigo_vendedor'];      
	
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];


		$update_vendedor = "UPDATE vendedor SET nome = '$nome', cpf = '$cpf' WHERE codigo_vendedor = $codigo_vendedor";
				
	
		if (mysqli_query($conexao,$update_vendedor)) {

				mysqli_close($conexao);

				echo "<script> alert ('VENDEDOR ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/vendedor/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/vendedor';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['nome'])) {      
	
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];


		$insert_vendedor = "INSERT INTO vendedor (nome, cpf) VALUES ('".$nome."', '".$cpf."')";
	
	
		if (mysqli_query($conexao,$insert_vendedor)) {

				mysqli_close($conexao);

				echo "<script> alert ('VENDEDOR CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/vendedor/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/vendedor';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>