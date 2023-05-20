<?php require('../topo_admin.php');?>



	<form id="form_pedido" name="form_pedido" method="post" action="salvar.php" class="form_pedido">

			<div><h1>CADASTRAR PEDIDO</h1></div>

				<div class="agrupamento_pedido">

						<div>
							<div><label>Descrição do pedido</label></div>	

							<div><input type="text" id="descricao" name="descricao" required autofocus></div>

						</div>

						<div>
							<div><label>Data de Compra</label></div>	

							<div><input type="date" id="data_compra" name="data_compra" required autofocus></div>

						</div>

												
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>