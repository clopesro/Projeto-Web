﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto Web</title>
	<link rel="stylesheet" type="text/css" href="../projetoWeb/css/loginSenha.css">
</head>
<body>
	<form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">
		<div><h1>MERCADINHO LEANDRO</h1></div>
		<div><img src="img/USUARIO.png" class="logo_USUARIO"></div>
			<div class="agrupamento_login">
				<div>
					<div><input type="text" placeholder="Digite seu login" id="nome_login" required autofocus></div>
					<div><input type="password" id="senha_login" placeholder="Digite sua senha" name="senha_login" required autofocus></div>
					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>
					<a href="#" class="recuperar_senha">Esqueceu a senha?</a>
				</div>
					
			</div>
	</form>
</body>
</html>