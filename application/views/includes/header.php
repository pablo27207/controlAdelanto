<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<?php echo $meta; ?>
		<title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/gritter/css/jquery.gritter.css" />
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/js/chart-master/Chart.js"></script>
    
    
       <?php echo generate_links_css($css); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url();?>welcome" class="logo"><b>Laffeuillade</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                
        
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url()?>login">Login</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
              	  <h5 class="centered">Juan Pablo Laffeuillade</h5>
              	  	
                  <li class="mt">
                      <a class="" href="<?php echo base_url();?>welcome">
                          <i class="fa fa-home"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>personal" >
                          <i class="fa fa-users"></i>
                          <span>Empleados</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>transacciones" >
                          <i class="fa fa-money"></i>
                          <span>Transacciones</span>
                      </a>
                    
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>informes" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Informes</span>
                      </a>
                    
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>configuracion" >
                          <i class="fa fa-gear"></i>
                          <span>Configuraciones</span>
                      </a>
                    
                  </li>
                
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
   