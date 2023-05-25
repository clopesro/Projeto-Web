<?php require('../topo_admin.php');?>



	<form id="form_cliente" name="form_cliente" method="post" action="salvar.php" class="form_cliente">

			<div><h1>CADASTRAR CLIENTE</h1></div>

				<div class="agrupamento_cliente">

						<div>
							<div><label>Nome do cliente</label></div>	

							<div><input type="text" id="nome" name="nome" required autofocus></div>

						</div>

						<div>
							<div><label>CPF</label></div>	

							<div><input type="text" id="cpf" name="cpf" required autofocus></div>

						</div>


						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>