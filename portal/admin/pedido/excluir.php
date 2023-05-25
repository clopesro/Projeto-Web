<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_pedido = $_GET['codigo_pedido'];

	$delete_pedido = "DELETE FROM pedido WHERE codigo_pedido = $codigo_pedido";
	
	
		if (mysqli_query($conexao,$delete_pedido)) {

				mysqli_close($conexao);

				echo "<script> alert ('PEDIDO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/pedido/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/pedido';</script>";
				
				mysqli_close($conexao);
			}
	

?>