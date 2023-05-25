<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_item = $_GET['codigo_item'];

	$delete_item = "DELETE FROM item WHERE codigo_item = $codigo_item";
	
	
		if (mysqli_query($conexao,$delete_item)) {

				mysqli_close($conexao);

				echo "<script> alert ('ITEM EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/item/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/item';</script>";
				
				mysqli_close($conexao);
			}
	

?>