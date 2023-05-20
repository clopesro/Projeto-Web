<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_produto = $_GET['codigo_produto'];

	$delete_produto = "DELETE FROM produto WHERE codigo_produto = $codigo_produto";
	
	
		if (mysqli_query($conexao,$delete_produto)) {

				mysqli_close($conexao);

				echo "<script> alert ('PRODUTO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/produto/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/produto';</script>";
				
				mysqli_close($conexao);
			}
	

?>