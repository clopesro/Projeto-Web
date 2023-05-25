<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_cliente'])) {

		$codigo_cliente = $_POST['codigo_cliente'];      
	
		$nome = $_POST['nome'];

		$cpf = $_POST['cpf'];



		$update_cliente = "UPDATE cliente SET nome = '$nome', cpf = '$cpf' WHERE codigo_cliente = $codigo_cliente";

		
	
		if (mysqli_query($conexao,$update_cliente)) {

				mysqli_close($conexao);

				echo "<script> alert ('CLIENTE ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cliente/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/cliente';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['nome'])) {      
	
		$nome = $_POST['nome'];

		$cpf = $_POST['cpf'];


		$insert_cliente = "INSERT INTO cliente (nome, cpf) VALUES ('".$nome."', '".$cpf."')";
	
	
		if (mysqli_query($conexao,$insert_cliente)) {

				mysqli_close($conexao);

				echo "<script> alert ('CLIENTE CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cliente/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/cliente';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>