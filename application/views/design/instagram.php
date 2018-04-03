<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MMWCA </title>

    <!-- Bootstrap -->
   
     <link href="<?php echo base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css';?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'assets/vendors/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet">
       <!-- NProgress -->
       <link href="<?php echo base_url().'assets/vendors/nprogress/nprogress.css';?>" rel="stylesheet">
    <!-- iCheck -->
     <link href="<?php echo base_url().'assets/vendors/iCheck/skins/flat/green.css';?>" rel="stylesheet">
   
    <!-- bootstrap-progressbar -->
    
     <link href="<?php echo base_url().'assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css';?>" rel="stylesheet">
    <!-- JQVMap -->
   
     <link href="<?php echo base_url().'assets/vendors/jqvmap/dist/jqvmap.min.css';?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
     <link href="<?php echo base_url().'assets/vendors/bootstrap-daterangepicker/daterangepicker.css';?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'assets/build/css/custom.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/build/css/mara.css';?>" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

       $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'INSTAGRAM ACTIVITIES',
                    x: -20 //center
                }, 
                credits: {
                      enabled: false
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'ACTIVITY TOTAL'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },

                series: []
            }
   
            $.getJSON("<?php echo site_url('welcome/instagram');?>", function(json) {
                
                options.xAxis.categories = json[0]['data'];
                options.series.push(json[1]);
                options.series.push(json[2]);
                options.series.push(json[3]);
                options.series.push(json[4]);
               
                var chart = new Highcharts.Chart(options);
            });
        });
 


    </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" id="title_nav" style="border: 0;">
              <a href="" class="logo">
              <img id="logo" src="<?php echo base_url().'assets/images/logo.png';?>" class="img-responsive"></a>
            </div>
            
            <div class="clearfix"></div><br /><br /><br/>
<hr>
           
            

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> HOME <!-- <span class="fa fa-chevron-down"></span> --></a>
                   
                  </li>
                  <li><a><i class="fa fa-edit"></i> CONSERVANCIES <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                      <li><a href="#">LAND COVERAGE</a></li>
                      <li><a href="#">LAND OWNERSHIP</a></li>
                     <li><a href="#">LAND OWNERSHIP</a></li>
                    

                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> PROJECTS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">USAID</a></li>
                      <li><a href="#">TUSK</a></li>
                      <li><a href="#">MMCA STRATEGY</a></li>
                      <li><a href="#">OBEL</a></li>
                      <li><a href="#">BAND</a></li>
                      <li><a href="#">LGT</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> PERFORMANCE <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                      <li><a href="#">USAID</a></li>
                      <li><a href="#">TUSK</a></li>
                      <li><a href="#">MMCA STRATEGY</a></li>
                      <li><a href="#">OBEL</a></li>
                      <li><a href="#">BAND</a></li>
                      <li><a href="#">LGT</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> POPULATION </a>
                    
                  </li>
                  <li><a><i class="fa fa-clone"></i>SOCIAL MEDIA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('home/facebook')?>">FACEBOOK</a></li>
                      <li><a href="<?=site_url('home/twitter')?>">TWITTER</a></li>
                      <li><a href="<?=site_url('home/instagram')?>">INSTAGRAM</a></li>
                      <li><a href="<?=site_url('home/website')?>">WEBSITE</a></li>
                      </ul>
                  <li><a><i class="fa fa-clone"></i>SUCCESS STORIES</a>
                   
                  </li>

                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <div class="sidebar-footer hidden-small">
              <a >
                <span class="glyphicon glyphicon-zcog" aria-hidden="true"></span>
              </a>
              <a >
                <span class="glyphicon glyphicon-fullzscreen" aria-hidden="true"></span>
              </a>
              <a >
                <span class="glyphicon glyphicon-eye-czlose" aria-hidden="true"></span>
              </a>
              <a>
                <span class="glyphicon glyphicon-zoff" aria-hidden="true"></span>
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
                    <img src="images/img.jpg" alt="">Welcome
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
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
              <span class="count_top"><i class="fa fa-clock-o"></i>USAID</span>
              <div class="count"></div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> TUSK</span>
              <div class="count"></div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> MMCA STRATEGY</span>
              <div class="count green"></div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> OBEL</span>
              <div class="count"></div>
              <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> BAND</span>
              <div class="count"></div>
             <!--  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> LGT</span>
              <div class="count"></div>
              <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div id ="container">

                
              
              </div>
            </div>

           <!--  <div class="col-md-6 col-sm-12 col-xs-12">
              <div id ="container1">

                
              
              </div>
            </div> -->

          </div>
          <br />

      

          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             <a href="https://colorlib.com">Copyright © iLabAfrica</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/jquery/dist/jquery.min.js';?>"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/bootstrap/dist/js/bootstrap.min.js';?>"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/fastclick/lib/fastclick.js';?>"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/nprogress/nprogress.js';?>"></script>
    <!-- Chart.js -->
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/Chart.js/dist/Chart.min.js';?>"></script>
       <!-- gauge.js -->
  <script type="text/javascript" src="<?php echo base_url().'assets/vendors/gauge.js/dist/gauge.min.js';?>"></script>
      <!-- bootstrap-progressbar -->
       <script type="text/javascript" src="<?php echo base_url().'assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js';?>"></script>
  
    <!-- iCheck -->
       <script type="text/javascript" src="<?php echo base_url().'assets/vendors/iCheck/icheck.min.js';?>"></script>
    <!-- Skycons -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/skycons/skycons.js';?>"></script>
    <!-- Flot -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/Flot/jquery.flot.js';?>"></script>
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/Flot/jquery.flot.pie.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/Flot/jquery.flot.time.js';?>"></script>
    
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/Flot/jquery.flot.stack.js';?>"></script>
   
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/Flot/jquery.flot.resize.js';?>"></script>

    <!-- Flot plugins -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/flot-spline/js/jquery.flot.spline.min.js';?>"></script>
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/flot.curvedlines/curvedLines.js';?>"></script>
    <!-- DateJS -->
    <script src=".."></script>
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/DateJS/build/date.js';?>"></script>
    <!-- JQVMap -->
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/jqvmap/dist/jquery.vmap.js';?>"></script>
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js';?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js';?>"></script>
   
    <!-- bootstrap-daterangepicker -->
    <script type="text/javascript" src="<?php echo base_url().'assets/vendors/moment/min/moment.min.js';?>"></script>
     <script type="text/javascript" src="<?php echo base_url().'assets/vendors/bootstrap-daterangepicker/daterangepicker.js';?>"></script>
    <!-- Custom Theme Scripts -->
    <script src=".."></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/build/js/custom.min.js';?>"></script>


  
  </body>
</html>
