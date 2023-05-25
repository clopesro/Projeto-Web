<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/portal';</script>";

	}	

	if ($_SESSION['tipo_login'] <> 0) {

		echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
		session_destroy();
	 
		unset ($_SESSION['nome_completo_login']);
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['tipo_login']);

		unset ($_SESSION['url']);
		unset ($_SESSION['url_admin']);
		unset ($_SESSION['url_aluno']);

		echo "<script> window.location.href='http://localhost/portal';</script>";				

	} 


?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['url']."/css/estilo.css";?>">

	<script>

		function confirmar_exclusao(codigo_cliente) {
		     
		     var resposta = confirm("Deseja continuar com a exclusão?");
		     
		     if (resposta == true) {
		     
		          window.location.href = "excluir.php?codigo_cliente="+codigo_cliente;
		     }
		}

	</script>

<script>

function confirmar_exclusao(codigo_vendedor) {
	 
	 var resposta = confirm("Deseja continuar com a exclusão?");
	 
	 if (resposta == true) {
	 
		  window.location.href = "excluir.php?codigo_vendedor="+codigo_vendedor;
	 }
}
</script>

<script>

function confirmar_exclusao(codigo_fornecedor) {
	 
	 var resposta = confirm("Deseja continuar com a exclusão?");
	 
	 if (resposta == true) {
	 
		  window.location.href = "excluir.php?codigo_fornecedor="+codigo_fornecedor;
	 }
}
</script>

<script>

function confirmar_exclusao(codigo_item) {
	 
	 var resposta = confirm("Deseja continuar com a exclusão?");
	 
	 if (resposta == true) {
	 
		  window.location.href = "excluir.php?codigo_item="+codigo_item;
	 }
}
</script>

<script>

function confirmar_exclusao(codigo_pedido) {
	 
	 var resposta = confirm("Deseja continuar com a exclusão?");
	 
	 if (resposta == true) {
	 
		  window.location.href = "excluir.php?codigo_pedido="+codigo_pedido;
	 }
}
</script>

<script>

function confirmar_exclusao(codigo_produto) {
	 
	 var resposta = confirm("Deseja continuar com a exclusão?");
	 
	 if (resposta == true) {
	 
		  window.location.href = "excluir.php?codigo_produto="+codigo_produto;
	 }
}
</script>
	
</head>


<body>

		<div class="barra_topo">

				<div class="barra_topo_n1">
						
						<img src="<?php echo $_SESSION['url']."/img/logo2.png";?>">

						<label><?php echo "Seja bem-vindo, ". $_SESSION['nome_completo_login'];?></label>

				</div>

			<div class="barra_topo_n2">
			
				<nav>

					<ul class="menu_admin">

						<li><a href="#">CLIENTE</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/cliente";?>">Cadastrar</a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/cliente/exibir.php";?>">Exibir</a></li>
				       		</ul>
						</li>


						<li><a href="#">VENDEDOR</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/vendedor";?>">Cadastrar</a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/vendedor/exibir.php";?>">Exibir</a></li>
				       		</ul>			       		
						</li>


						<li><a href="#">FORNECEDOR</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/fornecedor";?>">Cadastrar</a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/fornecedor/exibir.php";?>">Exibir</a></li>
				       		</ul>	       		
						</li>

						<li><a href="#">ITEM</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/item";?>">Cadastrar</a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/item/exibir.php";?>">Exibir</a></li>
				       		</ul>		       		
						</li>


						<li><a href="#">PEDIDO</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/pedido";?>">Cadastrar</a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/pedido/exibir.php";?>">Exibir</a></li>
				       		</ul>			       		
						</li>

						<li><a href="#">PRODUTO</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/produto";?>">Cadastrar</a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/produto/exibir.php";?>">Exibir</a></li>
				       		</ul>			       		
						</li>
						
						<li><a href="<?php echo $_SESSION['url']."/sair.php";?>">SAIR</a></li>

					</ul>

				</nav>

			</div>

		</div>