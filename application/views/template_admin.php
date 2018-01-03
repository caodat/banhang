<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">

    <title>Hệ thống quản trị</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Switch checkbox -->
	 <link href="<?php echo base_url(); ?>vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-select -->
    <link href="<?php echo base_url(); ?>styles/css/bootstrap-select.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>build/css/custom.min.css" rel="stylesheet">
  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Hệ thống quản trị</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>/styles/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2><?php 
                      $user ='';
                      
                      echo $user=$this->session->userdata('user_fullname');
                       ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>""><i class="fa fa-home"></i> Xem trang</a>  
                  </li>
                  <li><a href="<?php echo base_url() ?>admin_general"><i class="fa fa-cog"></i>Cài đặt chung</a></li>
                  <li><a href="<?php echo base_url() ?>admin_statistic"><i class="fa fa-bar-chart-o"></i>Thống kê</a>
                  </li>
                  <li><a href="<?php echo base_url() ?>admin_category"><i class="fa fa-clone"></i>Khối</a>
                  </li>
                  <li><a href="<?php echo base_url() ?>admin_user"><i class="fa fa-user"></i>Tài khoản</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url().'/admin/logout' ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>/styles/images/user.png" alt=""><?php 
                      $user ='';
                      
                      echo $user=$this->session->userdata('user_fullname');
                       ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a href="<?php echo base_url().'/admin/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count"><?php echo $this->Mod_admin1->count_user(); ?></div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->
          <div class="x_panel"> 
              <?php $this->load->view($content); ?>
          </div>  
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Development by <a href="http://caodatblog.com">caodatblog.com</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <!-- <script src="<?php echo base_url(); ?>vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <!-- <script src="<?php echo base_url(); ?>vendors/nprogress/nprogress.js"></script> -->
    <!-- Chart.js -->
    <!-- <script src="<?php echo base_url(); ?>vendors/Chart.js/dist/Chart.min.js"></script> -->
    <!-- gauge.js -->
    <!-- <script src="<?php echo base_url(); ?>vendors/gauge.js/dist/gauge.min.js"></script> -->
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script> -->
    <!-- Skycons -->
    <!-- <script src="<?php echo base_url(); ?>vendors/skycons/skycons.js"></script> -->
    <!-- Flot -->
   <!--  <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.resize.js"></script> -->
    <!-- Flot plugins -->
    <!-- <script src="<?php echo base_url(); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/flot.curvedlines/curvedLines.js"></script> -->
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <!-- <script src="<?php echo base_url(); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
     <script src="<?php echo base_url(); ?>styles/js/bootstrap-select.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>build/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <!-- Checkbox  -->
    <script src="<?php echo base_url(); ?>vendors/switchery/dist/switchery.min.js"></script>
    <!-- validator -->
    <!-- <script src="<?php echo base_url(); ?>/vendors/validator/validator.js"></script> -->
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script>

    <!-- Fancybox -->
    <script src="<?php echo base_url() ?>styles/jquery.fancybox.min.js"></script> 

    <script src="<?php echo base_url() ?>styles/jQuery.MultiFile.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url() ?>styles/custom.js"></script>
  
  </body>
</html>
