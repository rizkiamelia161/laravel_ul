<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('../gentelella-1.4.0/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('../gentelella-1.4.0/build/css/custom.min.css')}}" rel="stylesheet">
  </head>
@yield('nav-md')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><spa>Buku Komunikasi Siswa</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="datakasus"><i class="fa fa-home"></i> Dashboard </a>
                   
                  </li>
                  <li><a><i class="fa fa-edit"></i> Profile</a>
                    
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Pelanggaran</span></a>
                   
                  </li>

                  </li>
                  <li><a><i class="fa fa-desktop"></i> Guru</span></a>
                   
                  </li>

                  </li>
                  <li><a href="siswas"><i class="fa fa-desktop"></i> Siswa</span></a>
                   
                  </li>
                </ul>
              </div>
              <div class="menu_section">
               
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                   
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    
                      <a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main">
        @yield('konten')
        
        </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Rizki Amelia - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/nprogress/nprogress.j')}}s"></script>
    <!-- Chart.js -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('../gentelella-1.4.0/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('../gentelella-1.4.0/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('../gentelella-1.4.0/build/js/custom.min.js')}}"></script>
	
  </body>
</html>
