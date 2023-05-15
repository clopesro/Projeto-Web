<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_item = $_GET['codigo_item'];

	$delete_pedido = "DELETE FROM pedido WHERE codigo_item = $codigo_item";
	
	
		if (mysqli_query($conexao,$delete_pedido)) {

				mysqli_close($conexao);

				echo "<script> alert ('I EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.locatiTEMon.href='$url_admin/pedido/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/pedido';</script>";
				
				mysqli_close($conexao);
			}
	

?>