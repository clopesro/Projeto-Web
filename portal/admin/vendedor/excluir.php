<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_vendedor = $_GET['codigo_vendedor'];

	$delete_vendedor = "DELETE FROM vendedor WHERE codigo_vendedor = $codigo_vendedor";
	
	
		if (mysqli_query($conexao,$delete_vendedor)) {

				mysqli_close($conexao);

				echo "<script> alert ('VENDEDOR EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/vendedor/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/vendedor';</script>";
				
				mysqli_close($conexao);
			}
	

?>