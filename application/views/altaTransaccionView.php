<section id="main-content">
	<section class="wrapper">

		<div class="row mb">
			<div class="main-chart ">

				<!--CUSTOM CHART START -->
				<div class="border-head">
					<h3>Nueva transacci&oacute;n</h3>

				</div>






				<div id="rootwizard">
					<div class="navbar">
						<div class="navbar-inner">
							<div class="container">
								<ul>
									<li><a href="#tab1" data-toggle="tab">Empleado</a></li>
									<li><a href="#tab2" data-toggle="tab">Operaci&oacute;n</a></li>
									<li><a href="#tab3" data-toggle="tab">Detalle</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="bar" class="progress" style="height: 5px; margin-top: -30px;">
						<div class="progress-bar" role="progressbar" aria-valuenow="0"
							aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
					</div>
					<div class="tab-content">
						<div class="tab-pane" id="tab1">
							<div class="adv-table">
								<table cellpadding="0" cellspacing="0" border="0"
									class="display table table-bordered" id="hidden-table-info">
									<thead>
										<tr>
											<th>DNI</th>
											<th>Nro Legajo</th>
											<th class="hidden-phone">Nombre</th>
											<th class="hidden-phone">Apellido</th>
											<th class="hidden-phone">Tel&eacute;fono</th>
											<th class="hidden-phone">Email</th>
											<th class="hidden-phone">Seleccionar</th>
										</tr>
									</thead>
									<tbody>
	                                <?php foreach ($data['data_personal'] as $row){ ?>
	                    	  <?php if (isset($row-> estado) && (strcmp($row ->estado,'baja')==0)){
	                    	   echo('<tr class="danger">');}
	                        else{
	                            echo '<tr>';}
	                       ?>
	                    	
	                    		<td><?php echo $row -> dni; ?></td>
										<td><?php echo $row -> legajo; ?></td>
										<td><?php echo $row -> nombre; ?></td>
										<td><?php echo $row -> apellido; ?></td>
										<td><?php echo $row -> telefono; ?></td>
										<td><?php echo $row -> email; ?></td>
										<td class="center-colum-text"><input
											value="<?php echo $row -> id; ?>" type="checkbox"></td>


										</tr>
	                    	<?php 
	                    }?>
	                                </tbody>
								</table>
							</div>
							<br> <br>
						</div>
						<div class="tab-pane" id="tab2">
							


								<h4>Tipo de operaci&oacute;n</h4>
							<div class="radio" style="padding-left: 40px;">
								<label>
								<input type="radio" name="optionRadios" id="optionRadios1" value="ingreso" cheked>
									Ingreso
								</label>
							</div>
							<div class="radio" style="padding-left: 40px;">
								<label>
							<input type="radio" name="optionRadios" id="optionRadios2" value="egreso" cheked>
							Egreso 
								</label>
							</div>
								<br>
								<h4>Tipo de caja</h4>
								
							   <?php foreach ($data['data_tipo_caja'] as $row){ ?>
							   
							   <div class="radio" style="padding-left: 40px;">
								<label>
								<input type="radio" name="radioTipoCaja" id="radioTipoCaja<?php echo $row -> id; ?>" value="<?php echo $row -> id; ?>" cheked>
									<?php echo $row -> nombre; ?>
								</label>
							</div>
							
							  	<?php 
	                    }?>
						
								<h4>Montos</h4>
								
								<div class="form-horizontal" style=" padding-left: 20px;">
								<div class="form-group" >


									<label for="monto1" class="col-sm-2 control-label">Nombre, Empleado</label>



									<div class="input-group"  class="col-sm-4" style="padding-right: 50%;">
										<span class="input-group-addon">$</span> <input type="text"
											class="form-control input-sm" name='monto'id='monto1' aria-label="monto">

									</div>
								</div>
							</div>

						</div>
						<div class="tab-pane" id="tab3"></div>

						<ul class="pager wizard">
							<li class="previous first" style="display: none;"><a
								href="javascript:;">Primero</a></li>
							<li class="previous"><a href="javascript:;">Atras</a></li>
							<li class="next last" style="display: none;"><a
								href="javascript:;">Ultimo</a></li>
							<li class="next"><a href="javascript:;">Siguiente</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /row -->

	</section>
	<!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->