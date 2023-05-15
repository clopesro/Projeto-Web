<?php require('../topo_admin.php');?>



	<form id="form_pedido" name="form_pedido" method="post" action="salvar.php" class="form_pedido">

			<div><h1>CADASTRAR PEDIDO</h1></div>

				<div class="agrupamento_pedido">

						<div>
							<div><label>Código do pedido</label></div>	

							<div><input type="text" id="codigo_pedido" name="codigo_pedido" required autofocus></div>
							<div><label>Código do cliente</label></div>	

							<div><input type="text" id="codigo_cliente" name="codigo_cliente" required autofocus></div>
							<div><label>Descrição</label></div>	

							<div><input type="text" id="descricao" name="descricao" required autofocus></div>

							<div><label>Data da compra</label></div>
							<div><input type="date" name="data_compra" required autofocus></div>

						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>