<?php require('../topo_admin.php');?>



	<form id="form_vendedor" name="form_vendedor" method="post" action="salvar.php" class="form_vendedor">

			<div><h1>CADASTRAR VENDEDOR</h1></div>

				<div class="agrupamento_vendedor">

						<div>
							<div><label>Nome do vendedor</label></div>	

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