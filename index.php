<?php 
	include_once('head.php');
?>
				<div class="content-body">
					<div class="content">

						<div class="page-header">
							<div class="page-title">
								<h3>Gila Software</h3>
							</div>
						</div>
<?php 
	$sql1="SELECT * FROM `productos` as p
			INNER JOIN Categorias as c ON p.idCategorias=c.idCategorias 
			INNER JOIN atributos1 as a ON p.`idatributo1`=a.`idatributo1`
			WHERE 1;";
	$re1=mysqli_query($enlace,$sql1);
	if (mysqli_num_rows($re1)){
?>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title mb-0">
										Productos
										<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#altamodal">
											Dar de alta
										</button>
										</h6>
									</div>
									<div class="table-responsive">
										<table id="example1" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Nombre</th>
													<th>SKU</th>
													<th>Marca</th>
													<th>Costo</th>
													<th>Precio de venta</th>
													<th>Categorías</th>
													<th>Atributos</th>
												</tr>
											</thead>
											<tbody>
<?php
											while($row1=mysqli_fetch_assoc($re1)){
												$Precio=0;
												if($row1['idCategorias']==1){ 
													$Precio=$row1['Costo']+($row1['Costo']*.35);
													$row1['txtatribut']="Tipo de pantalla <b>".$row1['txtatribut']."</b><br> Tamaño de pantalla <b>".$row1['atributos2']."</b>";
												}
												elseif($row1['idCategorias']==2){
													$Precio=$row1['Costo']+($row1['Costo']*.40);
													$row1['txtatribut']="Procesador <b>".$row1['txtatribut']."</b><br> Memoria Ram <b>".$row1['atributos2']."</b>";
												}
												elseif($row1['idCategorias']==3){
													$Precio=$row1['Costo']+($row1['Costo']*.30);
													$row1['txtatribut']="Material <b>".$row1['txtatribut']."</b><br> Numero / Tamaño <b>".$row1['atributos2']."</b>";
													
												}
?>
												<tr>
													<td><?php echo $row1['Nombre']; ?></td>
													<td><?php echo $row1['SKU']; ?></td>
													<td><?php echo $row1['Marca']; ?></td>
													<td><?php echo $row1['Costo']; ?></td>
													<td><?php echo $Precio; ?></td>
													
													<td><?php echo $row1['NomCategorias']; ?></td>
													<td><?php echo $row1['txtatribut']; ?></td>
												</tr>
<?php
											}
?>
											</tbody>
											<tfoot>
												<tr>
													<th>Nombre</th>
													<th>SKU</th>
													<th>Marca</th>
													<th>Costo</th>
													<th>Precio de venta</th>
													<th>Categorías</th>
													<th>Atributos</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
<?php
	}
?>
					</div>
					<div class="modal" tabindex="-1" role="dialog" id="altamodal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Alta de productos</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i class="ti-close"></i>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="Nombre">Nombre</label>
											<input type="text" class="form-control" id="Nombre" >
										</div>
										<div class="form-group">
											<label for="SKU">SKU</label>
											<input type="text" class="form-control" id="SKU" >
										</div>
										<div class="form-group">
											<label for="Marca">Marca</label>
											<input type="text" class="form-control" id="Marca" >
										</div>
										<div class="form-group">
											<label for="Costo">Costo</label>
											<input type="number" class="form-control" id="Costo" >
										</div>
										<div class="form-group">
											<label for="Categorias">Categorías</label>
											<select class="form-control" id="Categorias" onchange="traeatributo();" >
<?php 
											$sql2="SELECT * FROM `Categorias` ORDER BY `idCategorias` ASC";
											$re2=mysqli_query($enlace,$sql2);
											if (mysqli_num_rows($re2)){
												?><option value="0" selected disabled >Seleccionar una categoría</option><?php 
												while($row2=mysqli_fetch_assoc($re2)){
												?><option value="<?php echo $row2['idCategorias']; ?>"><?php echo $row2['NomCategorias']; ?></option><?php 
												}
											}
?>
											</select>
										</div>
										<div class="form-group">
											<label for="atributo">Atributo</label>
											<select class="form-control" id="atributo" >
												<option value="0" selected disabled >Seleccionar una categoría</option>
											</select>
										</div>
										<div class="form-group">
											<label for="Atributo2" id="Atributo2txt">Atributo</label>
											<input type="number" class="form-control" id="Atributo2" >
										</div>
										
									</form>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
									<button type="button" class="btn btn-success" onclick="alta();">Gardar</button>
								</div>
							</div>
						</div>
					</div>
					<footer class="content-footer">
						<div>© 2022</div>
					</footer>
				</div>
			</div>
		</div>
		<script src="vendors/bundle.js"></script>
		<script src="vendors/dataTable/datatables.min.js"></script>
		<script src="assets/js/examples/datatable.js"></script>
		<script src="assets/js/app.min.js"></script>
		<script>
			function traeatributo(){
				var idCategorias=$("#Categorias").val();
				$.ajax({
					url:"traeatributo.php",
					type: "POST",
					data:"idCategorias="+idCategorias,
					success: function(x){
						$("#atributo").html(x);
					}
				});
			}
			
			function alta(){
				var Nombre=$("#Nombre").val();
				var SKU=$("#SKU").val();
				var Marca=$("#Marca").val();
				var Costo=$("#Costo").val();
				var Categorias=$("#Categorias").val();
				var atributo=$("#atributo").val();
				var Atributo2=$("#Atributo2").val();
				
				if(Nombre!="" && SKU!="" && Marca!="" && Costo!="" && Categorias!=null && atributo!=null && Atributo2!=""){
					$.ajax({
						url:"alta.php",
						type: "POST",
						data:"Nombre="+Nombre+"&SKU="+SKU+"&Marca="+Marca+"&Costo="+Costo+"&Categorias="+Categorias+"&atributo="+atributo+"&Atributo2="+Atributo2,
						success: function(x){
							location.reload();
						}
					});
				}else{
					alert('Todos los campos son requeridos')
				}
			}
		</script>
	</body>
</html>
