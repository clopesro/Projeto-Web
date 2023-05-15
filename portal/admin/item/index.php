<?php require('../topo_admin.php');?>



	<form id="form_item" name="form_item" method="post" action="salvar.php" class="form_item">

			<div><h1>CADASTRAR ITEM</h1></div>

				<div class="agrupamento_item">

						<div>

													
							<div><label>Código do item</label></div>	

							<div><input type="text" id="codigo_item" name="codigo_item" required autofocus></div>
							
							<div><label>Descrição</label></div>	

							<div><input type="text" id="descricao" name="descricao" required autofocus></div>

						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>