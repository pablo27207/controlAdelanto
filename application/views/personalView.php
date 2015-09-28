 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Empleados</h3>
				<div class="row mb">
        
				   <!-- page start-->
                  <div class="content-panel">
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
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data['data_usuarios'] as $row){ ?>
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