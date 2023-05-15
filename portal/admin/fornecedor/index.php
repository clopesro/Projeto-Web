<?php require('../topo_admin.php');?>



	<form id="form_fornecedor" name="form_fornecedor" method="post" action="salvar.php" class="form_fornecedor">

			<div><h1>CADASTRAR fornecedor</h1></div>

				<div class="agrupamento_fornecedor">

						<div>

							<div><label>Código do fornecedor</label></div>	
							<div><input type="text" id="codigo_fornecedor" name="codigo_fornecedor" required autofocus></div>

							<div><label>Nome do fornecedor</label></div>
							<div><input type="text" id="nome" name="nome" required autofocus></div>


							<div><label>CNPJ do fornecedor</label></div>
							<div><input type="text" id="cnpj" name="cnpj" required autofocus></div>

							<div><label>Telefone do fornecedor</label></div>
							<div><input type="text" id="telefone" name="telefone" required autofocus></div>

							<div><label>Endereço do fornecedor</label></div>
							<div><input type="text" id="endereco" name="endereco" required autofocus></div>

							<div><label>Email do fornecedor</label></div>
							<div><input type="text" id="email" name="email" required autofocus></div>

						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>

