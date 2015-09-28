<!-- Formulario para nuevo empleado -->

<section id="main-content">
	<section class="wraper">
		<h3><i class="fa fa-angle-right"></i> Alta de empleado</h3>
		<div class="row mt">
			<div class="col-lg-12">
				<div class="form-panel">
					<form class="form-horizontal">
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Tipo de usuario</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="tipoUsuarioAltaUsuario" placeholder="1 para administrador 2 para empleado">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Legajo</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="legajoAltaUsuario" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Nombre</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="nombreAltaUsuario" placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Apellido</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="apellidoAltaUsuario" placeholder="">
					    </div>  
					  </div>
					  <div class="form-group">
					  	<label class="col-sm-2 control-label">DNI</label>
					  	<div class="col-sm-3">
					  		<input type="text" class="form-control" name="dni" id="dni">
					  	</div>
					  </div>
					  <div class="form-group">
					  	<label class="control-label col-md-3">Fecha ingreso</label>
					      <div class="col-md-3 col-xs-11">
							<div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
					             <input type="text" id="fechaIngresoAltaUsuario" readonly="" value="01-01-2014" size="16" class="form-control">
					                <span class="input-group-btn add-on">
					                	<button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
					                </span>
					        </div>
					                <span class="help-block">Selecione la fecha</span>
					      </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Categoria</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="categoriaAltaUsuario" placeholder="">
					    </div>  
					  </div>
					  <div class="form-group has-success has-feedback">
						<label class="col-sm-2 control-label">Correo</label>
						 <div class="input-group col-sm-3">
						  <span class="input-group-addon">@</span>
						    <input type="text" class="form-control" id="correoAltaUsuario" aria-describedby="inputGroupSuccess3Status" placeholder="Correo electronico">
						 </div>
				      	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
						<span id="inputGroupSuccess3Status" class="sr-only">(success)</span>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-3">
					      <button type="submit" class="btn btn-default"><i class="fa fa-plus-square"></i>  Alta</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>