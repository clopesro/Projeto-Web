<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_pedido'])) {

		$codigo_pedido = $_POST['codigo_pedido'];      
	
		$descricao = $_POST['descricao'];

		$quantidade = $_POST['quantidade'];

		$data_compra = $_POST['data_compra'];
		



		$update_pedido = "UPDATE pedido SET descricao = '$descricao', quantidade = '$quantidade', data_compra = '$data_compra' WHERE codigo_pedido = $codigo_pedido";

		
							
		if (mysqli_query($conexao,$update_pedido)) {

				mysqli_close($conexao);

				echo "<script> alert ('PEDIDO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/pedido/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/pedido';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['descricao'])) {      
	
		$descricao = $_POST['descricao'];

		$quantidade = $_POST['quantidade'];

		$data_compra = $_POST['data_compra'];

		$insert_pedido = "INSERT INTO pedido (descricao,quantidade, data_compra) VALUES ('".$descricao."', '".$quantidade."', '".$data_compra."')";
	
	
		if (mysqli_query($conexao,$insert_pedido)) {

				mysqli_close($conexao);

				echo "<script> alert ('PEDIDO CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/pedido/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/pedido';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>