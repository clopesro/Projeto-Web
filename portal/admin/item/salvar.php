<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_item'])) {

		$codigo_item = $_POST['codigo_item'];      
	
		$descricao = $_POST['descricao'];

		
		$update_item = "UPDATE item SET descricao = '$descricao' WHERE codigo_item = $codigo_item";

			
		if (mysqli_query($conexao,$update_item)) {

				mysqli_close($conexao);

				echo "<script> alert ('ITEM ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/item/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/item';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['descricao'])) {      
	
		$descricao = $_POST['descricao'];

		$insert_item = "INSERT INTO item (descricao) VALUES ('".$descricao."')";
	
	
		if (mysqli_query($conexao,$insert_item)) {

				mysqli_close($conexao);

				echo "<script> alert ('ITEM CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/item/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/item';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>