<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_fornecedor = $_GET['codigo_fornecedor'];

	$delete_fornecedor = "DELETE FROM fornecedor WHERE codigo_fornecedor = $codigo_fornecedor";
	
	
		if (mysqli_query($conexao,$delete_fornecedor)) {

				mysqli_close($conexao);

				echo "<script> alert ('FORNECEDOR EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/fornecedor/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/fornecedor';</script>";
				
				mysqli_close($conexao);
			}
	

?>