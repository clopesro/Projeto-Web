<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_cliente = $_GET['codigo_cliente'];

	$delete_cliente = "DELETE FROM cliente WHERE codigo_cliente = $codigo_cliente";
	
	
		if (mysqli_query($conexao,$delete_cliente)) {

				mysqli_close($conexao);

				echo "<script> alert ('CLIENTE EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/cliente/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/cliente';</script>";
				
				mysqli_close($conexao);
			}
	

?>