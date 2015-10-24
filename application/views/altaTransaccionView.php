<div id="rootwizard" class="pagina" >
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
					<div id="bar" class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                    </div>
					<div class="tab-content">
					    <div class="tab-pane" id="tab1">
						       <div class="adv-table">
	                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
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
	                            <td class="center-colum-text">
                                 <input value= "<?php echo $row -> id; ?>" type="checkbox">
                            </td>
	                            
	                              
	                              	</tr>
	                    	<?php 
	                    }?>
	                                </tbody>
	                            </table>
	                        </div>
	                        <br>
	                         <br>
					    </div>
					    <div class="tab-pane" id="tab2">
					    <h3>Tipo de operaci&oacute;n</h3>
						    <div class="btn-group" data-toggle="buttons">
							  <label class="btn btn-primary active">
							    <input type="radio" autocomplete="off" checked> Ingreso
							  </label>
							  <label class="btn btn-primary">
							    <input type="radio" autocomplete="off"> Egreso
							  </label>
							</div>
							<br>
							<h3>Tipo de caja</h3>
						    <div class="btn-group" data-toggle="buttons">
							  
							   <?php foreach ($data['data_tipo_caja'] as $row){ ?>
							  <label class="btn btn-primary active">
							  <input type="radio" autocomplete="off" > <?php echo $row -> nombre; ?>
							  </label>
							  	<?php 
	                    }?>
						</div>
							
							<div id="empleadosSeleccionados" class="row">
							
							<div class="col-md-6">
							pepe lui
							</div>
							<div class="col-md-6">
									<h3>Monto</h3>
								<div class="input-group" >
								  <span class="input-group-addon">$</span>
								  <input type="text" class="form-control" name='monto' id='monto' aria-label="monto">
								 
								</div>
					       	
							</div>
							
						
							 </div>
					    </div>
						<div class="tab-pane" id="tab3">
						
					    </div>
						
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="javascript:;">Primero</a></li>
							<li class="previous"><a href="javascript:;">Atras</a></li>
							<li class="next last" style="display:none;"><a href="javascript:;">Ultimo</a></li>
						  	<li class="next"><a href="javascript:;">Siguiente</a></li>
						  	</ul>
					</div>
				</div>