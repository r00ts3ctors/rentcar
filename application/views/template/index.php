<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Amezia - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A premium admin dashboard template by themesbrand" name="description" />
  <meta content="Themesbrand" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/chartist/css/chartist.min.css">
  <link href="<?php echo base_url('assets'); ?>/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- Top Bar Start -->
  <div class="topbar">
    <div class="topbar-main">
      <div class="container-fluid">
        <!-- LOGO -->
        <div class="topbar-left">
          <a href="index.html" class="logo">
            <span>
              <img src="<?php echo base_url('assets'); ?>/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
            <span>
              <img src="<?php echo base_url('assets'); ?>/images/logo.png" alt="logo-large" class="logo-lg">
            </span>
          </a>
        </div>

        <!-- Navbar -->
        <nav class="navbar-custom">

          <!-- Search input -->
          <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
              <input class="search-input" type="search" placeholder="Search here.." />
              <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap">
                <i class="mdi mdi-close-circle"></i>
              </a>
            </div>
          </div>

          <ul class="list-unstyled topbar-nav float-right mb-0">
            <li>
              <a class="nav-link waves-effect waves-light search-btn" href="javascript:void(0);" data-target="#search-wrap">
                <i class="mdi mdi-magnify nav-icon"></i>
              </a>
            </li>

            <li class="hidden-sm">
              <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
              aria-haspopup="false" aria-expanded="false">
              English <img src="<?php echo base_url('assets'); ?>/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="<?php echo base_url('assets'); ?>/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
              <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="<?php echo base_url('assets'); ?>/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
              <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="<?php echo base_url('assets'); ?>/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
              <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="<?php echo base_url('assets'); ?>/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
              <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="<?php echo base_url('assets'); ?>/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
            </div>
          </li>

          <li class="dropdown">
            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="mdi mdi-bell-outline nav-icon"></i>
            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg">
            <!-- item-->
            <h6 class="dropdown-item-text">
              Notifications (258)
            </h6>
            <div class="slimscroll notification-list">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item active">
                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
              </a>
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
              </a>
            </div>
            <!-- All-->
            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
              View all <i class="fi-arrow-right"></i>
            </a>
          </div>
        </li>

        <li class="hidden-sm">
          <a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen">
            <i class="mdi mdi-fullscreen nav-icon"></i>
          </a>
        </li>

        <li class="dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" aria-expanded="false">
          <img src="<?php echo base_url('assets'); ?>/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
          <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
          <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
        </div>
      </li>
      <li class="menu-item">
        <!-- Mobile menu toggle-->
        <a class="navbar-toggle nav-link" id="mobileToggle">
          <div class="lines">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </a>
        <!-- End mobile menu toggle-->
      </li>
    </ul>

    <ul class="list-unstyled topbar-nav mb-0">

      <li class="hidden-sm">
        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="mdi mdi-library-plus mr-2"></i>Tools <i class="mdi mdi-chevron-down"></i>
      </a>
      <div class="dropdown-menu">

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item">
          Photoshop
        </a>
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item">
          Visual Studio
        </a>
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item">
          Sublime Text 3
        </a>
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item">
          Phpstorm
        </a>

      </div>
    </li>
    <li class="hidden-sm">
      <a class="nav-link waves-effect waves-light" href="../landing/index.html" target="_blank">
        <i class="mdi mdi-airplane mr-2"></i>Landing
      </a>
    </li>
  </ul>

</nav>
<!-- end navbar-->
</div>
</div>


<!-- MENU Start -->
<div class="navbar-custom-menu">
  <div class="container-fluid">
    <div id="navigation">
      <!-- Navigation Menu-->
      <ul class="navigation-menu">

        <li class="has-submenu">
          <a href="#">
            <i class="mdi mdi-view-dashboard"></i>
            Dashboard
          </a>
          <ul class="submenu">
            <li><a href="index.html">Dashboard 1</a></li>
            <li><a href="index-2.html">Dashboard 2</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="#"><i class="mdi mdi-email"></i>Email</a>
          <ul class="submenu">
            <li><a href="email-inbox.html">Inbox</a></li>
            <li><a href="email-read.html">Read Email</a></li>
            <li><a href="email-compose.html">Compose Email</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="#"><i class="mdi mdi-bullseye"></i>Advanced UI</a>
          <ul class="submenu">
            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
            <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
            <li><a href="advanced-nestable.html">Nestable List</a></li>
            <li><a href="advanced-ratings.html">Ratings</a></li>
            <li><a href="advanced-highlight.html">Highlight</a></li>
            <li><a href="advanced-clipboard.html">Clipboard</a></li>
            <li><a href="advanced-lightbox.html">Lightbox</a></li>
            <li><a href="advanced-session.html">Session Timeout</a></li>
            <li><a href="advanced-scrollbars.html">Scrollbars</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="#"><i class="mdi mdi-buffer"></i>UI Elements</a>
          <ul class="submenu megamenu">
            <li>
              <ul>
                <li><a href="ui-alerts.html">Alerts</a></li>
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-cards.html">Cards</a></li>
                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                <li><a href="ui-modals.html">Modals</a></li>
                <li><a href="ui-spinners.html">Spinners</a></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><a href="ui-typography.html">Typography</a></li>
                <li><a href="ui-progress.html">Progress</a></li>
                <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                <li><a href="ui-carousel.html">Carousel</a></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><a href="ui-pagination.html">Pagination</a></li>
                <li><a href="ui-video.html">Videos</a></li>
                <li><a href="ui-colors.html">Colors</a></li>
                <li><a href="ui-grid.html">Grid System</a></li>
                <li><a href="ui-toasts.html">Toasts</a></li>
              </ul>
            </li>
          </ul>
        </li>


        <li class="has-submenu">
          <a href="#"><i class="mdi mdi-arrow-down-drop-circle-outline"></i>More</a>
          <ul class="submenu">
            <li>
              <a href="calendar.html">Calendar</a>
            </li>
            <li class="has-submenu">
              <a href="#">Icons</a>
              <ul class="submenu">
                <li><a href="icons-materialdesign.html">Material Design</a></li>
                <li><a href="icons-dripicons.html">Dripicons</a></li>
                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                <li><a href="icons-themify.html">Themify</a></li>
                <li><a href="icons-typicons.html">Typicons</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Tables </a>
              <ul class="submenu">
                <li><a href="tables-basic.html">Basic</a></li>
                <li><a href="tables-datatable.html">Datatables</a></li>
                <li><a href="tables-responsive.html">Responsive</a></li>
                <li><a href="tables-editable.html">Editable</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Forms</a>
              <ul class="submenu">
                <li><a href="forms-elements.html">Basic Elements</a></li>
                <li><a href="forms-advanced.html">Advance Elements</a></li>
                <li><a href="forms-validation.html">Validation</a></li>
                <li><a href="forms-wizard.html">Wizard</a></li>
                <li><a href="forms-editors.html">Editors</a></li>
                <li><a href="forms-repeater.html">Repeater</a></li>
                <li><a href="forms-x-editable.html">X Editable</a></li>
                <li><a href="forms-uploads.html">File Upload</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Maps</a>
              <ul class="submenu">
                <li><a href="maps-google.html">Google Maps</a></li>
                <li><a href="maps-vector.html">Vector Maps</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Email Templates</a>
              <ul class="submenu">
                <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                <li><a href="email-templates-alert.html">Alert Email</a></li>
                <li><a href="email-templates-billing.html">Billing Email</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="#"><i class="mdi mdi-chart-bar"></i>Charts</a>
          <ul class="submenu">
            <li><a href="charts-morris.html">Morris</a></li>
            <li><a href="charts-chartist.html">Chartist</a></li>
            <li><a href="charts-flot.html">Flot</a></li>
            <li><a href="charts-peity.html">Peity</a></li>
            <li><a href="charts-chartjs.html">Chartjs</a></li>
            <li><a href="charts-sparkline.html">Sparkline</a></li>
            <li><a href="charts-knob.html">Jquery Knob</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="#"><i class="mdi mdi-book-open-page-variant"></i>Pages</a>
          <ul class="submenu megamenu">
            <li>
              <ul>
                <li><a href="page-tour.html">Tour</a></li>
                <li><a href="page-timeline.html">Timeline</a></li>
                <li><a href="page-invoice.html">Invoice</a></li>
                <li><a href="page-treeview.html">Treeview</a></li>
                <li><a href="page-profile.html">Profile</a></li>
                <li><a href="page-pricing.html">Pricing</a></li>
                <li><a href="page-faq.html">FAQs</a></li>
              </ul>
            </li>
            <li>
              <ul>
                <li><a href="page-starter.html">Starter Page</a></li>
                <li><a href="auth-login.html">Login</a></li>
                <li><a href="auth-register.html">Register</a></li>
                <li><a href="auth-recoverpw.html">Recover Password</a></li>
                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                <li><a href="auth-404.html">Error 404</a></li>
                <li><a href="auth-500.html">Error 500</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <!-- End navigation menu -->
    </div> <!-- end navigation -->
  </div> <!-- end container-fluid -->
</div> <!-- end navbar-custom -->
</div>
<!-- Top Bar End -->

<!-- Page Content-->
<div class="wrapper">

  <div class="container-fluid">

    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <div class="page-title-box">
          <div class="float-right">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0);">Amezia</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
              <li class="breadcrumb-item active">Dashboard 2</li>
            </ol>
          </div>
          <h4 class="page-title">Dashboard 2</h4>
        </div>
      </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
          <div class="card-body row justify-content-center">
            <div class="col-5 align-self-center">
              <h4 class="mt-0 mb-2 font-20">1530</h4>
              <p class="mb-2 text-muted font-13 text-nowrap">Unique Visitors</p>
              <span class="badge badge-soft-success mt-1 shadow-none"><i class="mdi mdi-menu-up font-16"></i>20.15%</span>
            </div>
            <div class="col-7 align-self-center">
              <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#b5f1e0"],"stroke": ["#0acf97"]}' data-height="80">1,2,3,4,3,6,3,5,3,3,4,2</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
          <div class="card-body row justify-content-center">
            <div class="col-5 align-self-center">
              <h4 class="mt-0 mb-2 font-20">8320</h4>
              <p class="mb-2 text-muted font-13 text-nowrap">New Users</p>
              <span class="badge badge-soft-danger mt-1 shadow-none"><i class="mdi mdi-menu-down font-16"></i>7.15%</span>
            </div>
            <div class="col-7 align-self-center text-right">
              <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#d6d8f5"],"stroke": ["#777edd"]}' data-height="80">0,3,6,3,4,2,6,1,8,4,4,2</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
          <div class="card-body row justify-content-center">
            <div class="col-5 align-self-center">
              <h4 class="mt-0 mb-2 font-20">1840</h4>
              <p class="mb-2 text-muted font-13 text-nowrap">New Orders</p>
              <span class="badge badge-soft-danger mt-1 shadow-none"><i class="mdi mdi-menu-down font-16"></i>6.05%</span>
            </div>
            <div class="col-7 align-self-center">
              <span class="peity-line" data-width="100%" data-peity='{ "fill": ["#fdebb5"],"stroke": ["#f9bc0b"]}' data-height="80">2,4,7,3,5,3,6,3,4,3,2,1,2</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card card-content">
          <div class="card-body row justify-content-center">
            <div class="col-5 align-self-center">
              <h4 class="mt-0 mb-2 font-20">2501</h4>
              <p class="mb-2 text-muted font-13 text-nowrap">Total Sales</p>
              <span class="badge badge-soft-success mt-1 shadow-none"><i class="mdi mdi-menu-up font-16"></i>8.97%</span>
            </div>
            <div class="col-7 align-self-center">
              <span class="peity-bar" data-peity='{ "fill": ["#ffd1e1", "#ffd1e1"]}' data-width="100%" data-height="80">5,6,2,8,9,4,7,10,11,12,10,4,7,10</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h5 class="mt-0">Overview</h5>
            <div class="row">
              <div class="col-lg-9 col-xl-9 border-right">
                <div class="card shadow-none mb-0 ">
                  <div class="card-body">
                    <div id="morris-line-chart" class="morris-chart overview-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-3 col-xl-3">
                <div class="card mb-0 overview shadow-none">
                  <div class="card-body border-bottom">
                    <div class="">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <div class="overview-content">
                            <i class="mdi mdi-share-variant  text-success"></i>
                          </div>
                        </div>
                        <div class="col-8 text-right">
                          <p class="text-muted font-13 mb-0">Sheres</p>
                          <h4 class="mb-0 font-20">7,503</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body border-bottom">
                    <div class="">
                      <div class="row  align-items-center">
                        <div class="col-4">
                          <div class="overview-content">
                            <i class="mdi mdi-gesture-double-tap  text-purple"></i>
                          </div>
                        </div>
                        <div class="col-8 text-right">
                          <p class="text-muted font-13 mb-0">Clicks</p>
                          <h4 class="mb-0 font-20">3,503</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body border-bottom">
                    <div class="">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <div class="overview-content">
                            <i class="mdi mdi-earth text-warning"></i>
                          </div>
                        </div>
                        <div class="col-8 text-right">
                          <p class="text-muted font-13 mb-0">Countries</p>
                          <h4 class="mb-0 font-20">51</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="">
                      <div class="row  align-items-center">
                        <div class="col-4">
                          <div class="overview-content">
                            <i class="mdi mdi-access-point text-pink"></i>
                          </div>
                        </div>
                        <div class="col-8 text-right">
                          <p class="text-muted font-13 mb-0">Virality</p>
                          <h4 class="mb-0 font-20">4.55%</h4>
                        </div>
                        <div class="col-12">
                          <div class="progress mt-4" style="height:6px;">
                            <div class="progress-bar progress-animated bg-pink" role="progressbar" style="max-width: 85%; border-radius:5px;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
      </div>
    </div><!--end row-->

    <div class="row">
      <div class="col-md-12 col-lg-6 col-xl-3">
        <div class="card">
          <div class="card-body donut">
            <h5 class="mt-0">Summary</h5>
            <div id="animating-donut" class="ct-chart ct-golden-section mb-3 summary-chart"></div>
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item mt-2">
                <span class="text-muted font-13"><i class="mdi mdi-checkbox-blank-circle mr-2 text-info"></i>In-Store </span>
              </li>
              <li class="list-inline-item mt-2">
                <span class="text-muted font-13"><i class="mdi mdi-checkbox-blank-circle mr-2 text-danger"></i>Download</span>
              </li>
              <li class="list-inline-item mt-2">
                <span class="text-muted font-13"><i class="mdi mdi-checkbox-blank-circle mr-2 text-success"></i>Mail-Order</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12  col-lg-6 col-xl-6">
        <div class="card">
          <div class="card-body">
            <h5 class="mt-0">By Countrues</h5>
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <div id="world-map-markers" class="dashboard-map"></div>
              </div>
              <div class="col-md-12 col-lg-4 align-self-center">
                <p class="text-muted font-13 mb-1"><i class="mdi mdi-checkbox-blank-circle mr-2 text-success"></i>India
                  <span class="float-right">35%</span>
                </p>
                <div class="progress mb-4" style="height:3px;">
                  <div class="progress-bar progress-animated bg-success" role="progressbar" style="max-width: 35%; border-radius: 50px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p class="text-muted font-13 mb-1"><i class="mdi mdi-checkbox-blank-circle mr-2 text-success"></i>USA
                  <span class="float-right">58%</span>
                </p>
                <div class="progress mb-4" style="height:3px;">
                  <div class="progress-bar progress-animated bg-success" role="progressbar" style="max-width: 58%; border-radius: 50px;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p class="text-muted font-13 mb-1"><i class="mdi mdi-checkbox-blank-circle mr-2 text-danger"></i>Russia
                  <span class="float-right">85%</span>
                </p>
                <div class="progress mb-4" style="height:3px;">
                  <div class="progress-bar progress-animated bg-danger" role="progressbar" style="max-width: 85%; border-radius: 50px;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p class="text-muted font-13 mb-1"><i class="mdi mdi-checkbox-blank-circle mr-2 text-success"></i>Australia
                  <span class="float-right">71%</span>
                </p>
                <div class="progress mb-0" style="height:3px;">
                  <div class="progress-bar progress-animated bg-success" role="progressbar" style="max-width: 71%; border-radius: 50px;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-12 col-xl-3">
        <div class="card bg-primary text-white income">
          <div class="card-body">
            <h5 class="mt-0">This Month Income</h5>
            <div class="">
              <h1 class="my-4"><i class="mdi mdi-wallet text-light  mr-3"></i>$ 8530.50</h1>
              <span class="float-right">Last Month : $6500.50</span>
              <a href="#" class="text-white my-4">Read More<i class="mdi mdi-arrow-right ml-2"></i></a>
              <div class="mt-4">
                <span class="peity-bar" data-peity='{ "fill": ["#9dcee8", "#9dcee8"]}' data-width="100%" data-height="162">1,2,3,4,3,6,3,5,3,8,4,2,6,3,5,3,8,4,2,5,2,3,4,3,6</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="pb-3 mt-0">Most Visited Pages</h5>
            <div class="table-responsive">
              <table id="datatable" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Page</th>
                    <th>Visiteors</th>
                    <th>Unique Page Visitors</th>
                    <th>Bounce Rate</th>
                    <th>Shares</th>
                    <th>Countries</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>Home And News</td>
                    <td>2541</td>
                    <td>1214</td>
                    <td>42.5%</td>
                    <td>6969</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>Charts</td>
                    <td>1001</td>
                    <td>2213</td>
                    <td>61.5%</td>
                    <td>2154</td>
                    <td>16</td>
                  </tr>
                  <tr>
                    <td>Table And News</td>
                    <td>5514</td>
                    <td>5878</td>
                    <td>21.5%</td>
                    <td>2201</td>
                    <td>02</td>
                  </tr>
                  <tr>
                    <td>Dashboard</td>
                    <td>3546</td>
                    <td>4521</td>
                    <td>54.3%</td>
                    <td>2451</td>
                    <td>09</td>
                  </tr>
                  <tr>
                    <td>Card.html</td>
                    <td>6514</td>
                    <td>841</td>
                    <td>74.2%</td>
                    <td>5101</td>
                    <td>14</td>
                  </tr>
                  <tr>
                    <td>Alerts.html</td>
                    <td>5422</td>
                    <td>6688</td>
                    <td>81.9%</td>
                    <td>5849</td>
                    <td>13</td>
                  </tr>
                  <tr>
                    <td>Tool-tip</td>
                    <td>3522</td>
                    <td>1204</td>
                    <td>11.5%</td>
                    <td>3187</td>
                    <td>14</td>
                  </tr>
                  <tr>
                    <td>Datatable</td>
                    <td>2144</td>
                    <td>102</td>
                    <td>21.5%</td>
                    <td>2201</td>
                    <td>02</td>
                  </tr>
                  <tr>
                    <td>Form-Editor</td>
                    <td>2001</td>
                    <td>8421</td>
                    <td>19.1%</td>
                    <td>3214</td>
                    <td>09</td>
                  </tr>
                  <tr>
                    <td>Calender</td>
                    <td>6514</td>
                    <td>302</td>
                    <td>44.5%</td>
                    <td>2039</td>
                    <td>21</td>
                  </tr>
                  <tr>
                    <td>Invoice</td>
                    <td>3341</td>
                    <td>1024</td>
                    <td>38.5%</td>
                    <td>3401</td>
                    <td>18</td>
                  </tr>
                  <tr>
                    <td>Tour.html</td>
                    <td>3211</td>
                    <td>2230</td>
                    <td>38.0%</td>
                    <td>8455</td>
                    <td>03</td>
                  </tr>
                  <tr>
                    <td>Login And Error</td>
                    <td>8879</td>
                    <td>998</td>
                    <td>21.5%</td>
                    <td>2201</td>
                    <td>02</td>
                  </tr>
                  <tr>
                    <td>Profile</td>
                    <td>2254</td>
                    <td>2841</td>
                    <td>71.2%</td>
                    <td>1444</td>
                    <td>09</td>
                  </tr>
                  <tr>
                    <td>Google Map</td>
                    <td>55</td>
                    <td>520</td>
                    <td>23.5%</td>
                    <td>9969</td>
                    <td>12</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

  </div><!-- container -->

  <footer class="footer text-center text-sm-left">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          © 2018-2019 Amezia <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end page-wrapper -->


<!-- jQuery  -->
<script src="<?php echo base_url('assets'); ?>/js/jquery.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/waves.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url('assets'); ?>/plugins/chartist/js/chartist.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/peity-chart/jquery.peity.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url('assets'); ?>/pages/jquery.dashboard2.init.js"></script>

<!-- App js -->
<script src="<?php echo base_url('assets'); ?>/js/app.js"></script>

</body>
</html>
