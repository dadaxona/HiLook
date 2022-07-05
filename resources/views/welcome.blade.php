<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega able</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link href="bootstrap-5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <script src="jquery-3.6.0/dist/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="toastr/toastr.min.css" />
      <script src="toastr/toastr.min.js"></script>
      
      <style>
        .extr22{
            height: 255px;
        }
        .ext{
            height: 460px;
        }
        .tab{
            width: 100%;
            margin: 5px; 
        }
        tr{
            border-bottom: 1px solid; 
        }
        .scrolll2{
            overflow-x: auto;
        }

        .rty2{
            width: 100%;
        }
        .rty2swe{
            width: 200%;
        }
        .buts{
            height: 35px;
            padding: 7px;
        }

    #feedback { font-size: 1.4em; }
    #tbody2 .ui-selecting { background: #277890; }
    #tbody2 .ui-selected { background: #277890; color: white; }
    #tbody2 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #tbody2 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #ttbody .ui-selecting { background: #277890; }
    #ttbody .ui-selected { background: #277890; color: white; }
    #ttbody { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #ttbody tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #clent .ui-selecting { background: #277890; }
    #clent .ui-selected { background: #277890; color: white; }
    #clent { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #clent tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #savdobirlamchi .ui-selecting { background: #277890; }
    #savdobirlamchi .ui-selected { background: #277890; color: white; }
    #savdobirlamchi { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #savdobirlamchi tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #dolg .ui-selecting { background: #277890; }
    #dolg .ui-selected { background: #277890; color: white; }
    #dolg { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #dolg tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #savdo .ui-selecting { background: #277890; }
    #savdo .ui-selected { background: #277890; color: white; }
    #savdo { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #savdo tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #clent_tip .ui-selecting { background: #277890; }
    #clent_tip .ui-selected { background: #277890; color: white; }
    #clent_tip { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #clent_tip tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #zaqazz123 .ui-selecting { background: #277890; }
    #zaqazz123 .ui-selected { background: #277890; color: white; }
    #zaqazz123 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #zaqazz123 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #imya .ui-selecting { background: #277890; }
    #imya .ui-selected { background: #277890; color: white; }
    #imya { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #imya tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #tbody .ui-selecting { background: #277890; }
    #tbody .ui-selected { background: #277890; color: white; }
    #tbody { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #tbody tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #tbody3 .ui-selecting { background: #277890; }
    #tbody3 .ui-selected { background: #277890; color: white; }
    #tbody3 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #tbody3 tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #tavar_tip .ui-selecting { background: #277890; }
    #tavar_tip .ui-selected { background: #277890; color: white; }
    #tavar_tip { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #tavar_tip tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

    #feedback { font-size: 1.4em; }
    #tavarlar .ui-selecting { background: #277890; }
    #tavarlar .ui-selected { background: #277890; color: white; }
    #tavarlar { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #tavarlar tr { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
    
      </style>
  </head>
  <body>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                          {{-- <h4 style="color: #eff0f3">HiLook</h4> --}}
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a onclick="reflesh()" class="waves-effect waves-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                  </svg>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class="label label-danger">New</label>
                                  </li>
                              </ul>
                          </li>
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="assets/images/a.jpg" class="img-radius" alt="User-Profile-Image">
                                  <span>{{ $brends->login }}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">                          
                                  <li class="waves-effect waves-light">
                                      <a href="{{ route('profil') }}">
                                          <i class="ti-user"></i> Profile
                                      </a>
                                  </li>
                           
                                  <li class="waves-effect waves-light">
                                      <a href="/logaut">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="assets/images/a.jpg" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">{{ $brends->login }}<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="{{ route('profil') }}"><i class="ti-user"></i>View Profile</a>
                                          <a href="/logaut"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Расположение</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="/glavninachal" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>Д</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Дашборд</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="{{ route('clents') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Создать товар</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                                <li class="">
                                    <a href="{{ route('edit3') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Товар списка</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('clent2') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Продажа товар</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                          </ul>               
                      </div>
                  </nav>
                  <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper p-2">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function reflesh(){
            location.reload(true);
        }
    </script>
    
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1/dist/js/bootstrap.min.js"></script>    
    <script src="bootstrap-5.2.0-beta1/js/popper.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
