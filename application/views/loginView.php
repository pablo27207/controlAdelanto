 <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo base_url()?>login/acceder" method="POST">
		        <h2 class="form-login-heading">Ingresar</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="email" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Contrase&ntilde;a">
		            
		               
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Olvido su contrase&ntilde;a?</a>
		
		                </span>
		            
		            
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Ingresar</button>
		            <hr>
		              <?php if (!empty($data['mensajeError']) ) {?>
						<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert"
								aria-hidden="true">&times;</button>
							<?php echo $data['mensajeError']?>
						</div>
						<?php }?>
		      
		
		        </div>
		
		          <!-- Modal 
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">olvid&oacute; su contrase&ntilde;a?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		         modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>
