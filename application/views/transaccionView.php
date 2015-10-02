 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper" id="paginaTransaccion">
          	<h3><i class="fa fa-angle-right"></i> Transacciones
          	
          	<a href="<?php echo base_url(); ?>transacciones/vistaAltaTransaccion" class="btn btn-success btn-sm pull-right">
                <i class="fa fa-plus"></i>
                Nueva transacci&oacute;n
            </a>
            </h3>
				<div class="row mb">
        
				   <!-- page start-->
                  <div class="content-panel">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Caja</th>
                                    <th>Operaci&oacute;n</th>
                                    <th class="hidden-phone">Nombre</th>
                                    <th class="hidden-phone">Apellido</th>
                                    <th class="hidden-phone">Fecha</th>
                                     <th class="hidden-phone">Email</th>   
                                     <th class="hidden-phone">Detalle</th>                      
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data['data_transaccion'] as $row){ ?>
                    	  <?php if (isset($row-> estado) && (strcmp($row ->estado,'baja')==0)){
                    	   echo('<tr class="danger">');}
                        else{
                            echo '<tr>';}
                       ?>
                    	
                    		<td><?php echo $row -> id; ?></td>
                    		<td><?php echo $row -> tipo_caja_id; ?></td>
                    		<td><?php echo $row -> tipoOperacion; ?></td>
                            <td><?php echo $row -> usuario->get()->nombre; ?></td>
                            <td><?php echo $row ->usuario->get()->apellido;?></td>
                            <td><?php echo $row -> fecha; ?></td>
                             <td><?php echo $row -> detalle; ?></td>
                             <a href=""><i class="fa fa-times fa-fw"></i></a>
                            
                              
                              	</tr>
                    	<?php 
                    }?>
                                </tbody>
                            </table>
                        </div>
                  </div>
              <!-- page end-->

				
              </div><!-- /row -->

		</section> <!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->