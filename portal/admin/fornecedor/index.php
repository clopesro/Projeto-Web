<?php require('../topo_admin.php');?>



	<form id="form_fornecedor" name="form_fornecedor" method="post" action="salvar.php" class="form_fornecedor">

			<div><h1>CADASTRAR FORNECEDOR</h1></div>

				<div class="agrupamento_fornecedor">

						<div>
							<div><label>Nome do fornecedor</label></div>	

							<div><input type="text" id="nome" name="nome" required autofocus></div>

						</div>

						<div>
							<div><label>CNPJ</label></div>	

							<div><input type="text" id="cnpj" name="cnpj" required autofocus></div>

						</div>

						<div>
							<div><label>Telefone</label></div>	

							<div><input type="text" id="telefone" name="telefone" required autofocus></div>

						</div>

						<div>
							<div><label>Endereço</label></div>	

							<div><input type="text" id="endereco" name="endereco" required autofocus></div>

						</div>

						<div>
							<div><label>Email</label></div>	

							<div><input type="text" id="email" name="email" required autofocus></div>

						</div>


						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>