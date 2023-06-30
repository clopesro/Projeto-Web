<?php //session_start();

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db_name = "mercadinho_leandro";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/portal";

	$url_admin = "http://".$host_ip."/portal/admin";
	$url_aluno = "http://".$host_ip."/portal/aluno";
	$url_cliente = "http://".$host_ip."/portal/cliente";
	$url_vendedor = "http://".$host_ip."/portal/vendedor";
	$url_fornecedor = "http://".$host_ip."/portal/fornecedor";
	$url_fornecedor = "http://".$host_ip."/portal/item";
	$url_fornecedor = "http://".$host_ip."/portal/pedido";
	$url_fornecedor = "http://".$host_ip."/portal/produto";
	
	
?>
