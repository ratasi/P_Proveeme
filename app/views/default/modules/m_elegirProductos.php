<h4 class="text-center">Productos del proveedor <?php echo $tsArray[0]['nombreEmpresa'];?></h4>
			<form class="form-horizontal" method="POST" action="index.php">
				<table class="table table-hover">
				<thead class="text-center">
					<tr class="telegir">
						<th>Producto</th>
						<th>Tipo</th>
						<th>Precio</th>
						<th>Medida</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody class="t-ProdPed tbl-content">
							<?php foreach ($tsArray as $data): ?>
								<tr>
									<td><?php echo $data['nombre'];?></td>
									<td><?php echo $data['Tipo'];?></td>
									<td><?php echo $data['precio'];?></td>
									<td><?php echo $data['medida'];?></td>
									<td>
									    <div class="form-group">
									        <div class="col-xs-5">
									            <input type="number" class="form-control cantidades" name="cantidades[]" min="0" id="cantidades">
									        </div>
									    </div>
							    	</td>
								</tr>
							 <?php endforeach;?>
				</tbody>
				</table>
				<div class="form-group center-block">
					<div class="col-lg-12">
						<input type="submit"  class="btn btn-primary btn-lg btn-block envioPedido" value="Enviar">
					</div>
				</div>
			</form>	