<!DOCTYPE html>
<html lang="en">
<head>
    <title>Able Pro Responsive Bootstrap 4 Admin Template by Phoenixcoded</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/icon/icofont/css/icofont.css">
    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/icon/simple-line-icons/css/simple-line-icons.css">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="<?php echo base_url();?>adminassets/plugins/chartist/css/chartist.css" type="text/css" media="all">
    <!-- Weather css -->
    <link href="<?php echo base_url();?>adminassets/css/svg-weather.css" rel="stylesheet">
    <!-- Data Table Css -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/data-table/css/buttons.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
 <!-- Date Picker css -->
 <link rel="stylesheet" href="<?php echo base_url();?>adminassets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
 <!-- Sweetalert CSS -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/sweetalert/css/sweetalert.css">
 <!-- Modal animation CSS -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/modal/css/component.css">
 <!-- bash syntaxhighlighter css -->
 <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>adminassets/plugins/syntaxhighlighter/css/shCoreDjango.css"/>


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/main.css">
    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/color/color-6.css" id="color"/>


</head>
<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
<div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div> -->
    <!-- Navbar-->
    <header class="main-header-top">
        <a href="index-2.html" class="logo"><img class="img-fluid able-logo" src="<?php echo base_url();?>adminassets/images/logo.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->
                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                        <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                            <i class="icofont icofont-search-alt-1"></i>
                        </a>
                    </li>
                    <li class="dropdown notification-menu">
                        <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                            <i class="icon-bell"></i>
                            <span class="badge badge-danger header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                    <span class="mr-3 media-icon">
                    <img class="rounded-circle" src="<?php echo base_url();?>adminassets/images/avatar-1.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div></a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                    <span class="mr-3 media-icon">
                    <img class="rounded-circle" src="<?php echo base_url();?>adminassets/images/avatar-2.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div></a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media"><span class="mr-3 media-icon">
                    <img class="rounded-circle" src="<?php echo base_url();?>adminassets/images/avatar-3.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                            </li>
                            <li class="not-footer">
                                <a href="#!">See all notifications.</a>
                            </li>
                        </ul>
                    </li>
                    <!-- chat dropdown -->
                    <li class="pc-rheader-submenu ">
                        <a href="#!" class="drop icon-circle displayChatbox">
                            <i class="icon-bubbles"></i>
                            <span class="badge badge-danger header-badge blink">5</span>
                        </a>

                    </li>
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="rounded-circle" src="<?php echo base_url();?>adminassets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                            <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                            <li><a href="profile.html"><i class="icon-user"></i> Profile</a></li>
                            <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
                            <li><a href="#!"><i class="icon-logout"></i> Logout</a></li>

                        </ul>
                    </li>
                </ul>

                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search..."/>

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan"/>
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona"/>
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo base_url();?>adminassets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo base_url();?>adminassets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                           <a class="dummy-media-object" href="#!">
                                <img src="<?php echo base_url();?>adminassets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo base_url();?>adminassets/images/avatar-1.png" alt="NotificationStyles"/>
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div><!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </nav>
    </header>
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url();?>adminassets/images/avatar-1.png" alt="User Image" class="rounded-circle"></div>
                <div class="f-left info">
                    <p>John Doe</p>
                    <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                    <a class="waves-effect waves-dark" href="profile.html">
                        <i class="icon-user"></i>
                        <span class="menu-text">View Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-settings"></i>
                        <span class="menu-text">Settings</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">Navigation</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index-2.html">
                        <i class="icon-speedometer"></i><span> Dashboard</span><i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a class="waves-effect waves-dark" href="index-2.html"><i class="icon-arrow-right"></i><span>Dashboard 1 </span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard2.html"><i class="icon-arrow-right"></i><span>Dashboard 2 </span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard3.html"><i class="icon-arrow-right"></i><span>Dashboard 3 </span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard4.html"><i class="icon-arrow-right"></i><span>Dashboard 4 </span></a></li>
                    </ul>
                </li>
               <li><a href="widget.html"><i class="icon-grid"></i><span> Widget</span><span class="label label-warning menu-caption">100+</span></a> </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-film"></i>
                    <span> Page Layout</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="menu-static.html"><i class="icon-arrow-right"></i> Static Layout</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-fixed.html"><i class="icon-arrow-right"></i> Header and Sidebar Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-sidebar-sticky.html"><i class="icon-arrow-right"></i> Sidebar Sticky</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-header-fixed.html"><i class="icon-arrow-right"></i> Header Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-horizontal.html" target="_blank"><i class="icon-arrow-right"></i> Menu Horizontal</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-horizontal-icon.html" target="_blank"><i class="icon-arrow-right"></i> Menu Horizontal Icon</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-horizontal-fixed.html" target="_blank"><i class="icon-arrow-right"></i> Header Horizontal Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-horizontal-icon-fixed.html" target="_blank"><i class="icon-arrow-right"></i> Header Horizontal Icon Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-footer-fixed.html"><i class="icon-arrow-right"></i> Footer Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-bottom.html" target="_blank"><i class="icon-arrow-right"></i> Bottom Menu Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="mega-menu.html" target="_blank"><i class="icon-arrow-right"></i> Mega Menu</a></li>
          <li><a class="waves-effect waves-dark" href="box-layout.html"><i class="icon-arrow-right"></i> Box-Layout </a></li>
                    </ul>
                </li>
                <li class="nav-level">Components</li>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Accordion</a></li>
                        <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Button</a></li>
                        <li><a class="waves-effect waves-dark" href="button-fab.html"><i class="icon-arrow-right"></i> Button FAB</a></li>
                        <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Label Badge</a></li>
                        <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Grid system</a></li>
                        <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> Box Shadow</a></li>
                        <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a></li>
                        <li><a class="waves-effect waves-dark" href="draggable.html"><i class="icon-arrow-right"></i> Draggable</a></li>
                        <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light Box</a></li>
                        <li><a class="waves-effect waves-dark" href="list.html"><i class="icon-arrow-right"></i> List</a></li>
                        <li><a class="waves-effect waves-dark" href="nestable.html"><i class="icon-arrow-right"></i> Nestable</a></li>
                        <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i> Notification</a></li>
                        <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i> Panels-Wells</a></li>
                        <li><a class="waves-effect waves-dark" href="preloader.html"><i class="icon-arrow-right"></i> Preloader</a></li>
                        <li><a class="waves-effect waves-dark" href="range-slider.html"><i class="icon-arrow-right"></i> Range-Slider</a></li>
                        <li><a class="waves-effect waves-dark" href="rating.html"><i class="icon-arrow-right"></i> Rating</a></li>
                        <li><a class="waves-effect waves-dark" href="slider.html"><i class="icon-arrow-right"></i> Slider</a></li>
                        <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a></li>
                        <li><a class="waves-effect waves-dark" href="treeview.html"><i class="icon-arrow-right"></i> Tree View</a></li>
                        <li><a class="waves-effect waves-dark" href="tour.html"><i class="icon-arrow-right"></i> Tour</a></li>
                        <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i> Tooltips</a></li>
                        <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i> Typography</a></li>
                        <li><a class="waves-effect waves-dark" href="card.html"><i class="icon-arrow-right"></i> Card</a></li>
                        <li><a class="waves-effect waves-dark" href="footer.html"><i class="icon-arrow-right"></i> Footer</a></li>
                        <li><a class="waves-effect waves-dark" href="footer-center.html"><i class="icon-arrow-right"></i> Footer Center</a></li>
                        <li><a class="waves-effect waves-dark" href="footer-right.html"><i class="icon-arrow-right"></i> Footer Right</a></li>
                        <li><a class="waves-effect waves-dark" href="other.html"><i class="icon-arrow-right"></i> Other</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-picture"></i><span> Theme UI</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="contact-card.html"><i class="icon-arrow-right"></i> Contact Card</a></li>
                        <li><a class="waves-effect waves-dark" href="contact-details.html"><i class="icon-arrow-right"></i> Contact Details</a></li>
                        <li><a class="waves-effect waves-dark" href="animation.html"><i class="icon-arrow-right"></i> Animation</a></li>
                        <li><a class="waves-effect waves-dark" href="dynamic-grid.html"><i class="icon-arrow-right"></i> Dynamic Grid</a></li>
                        <li><a class="waves-effect waves-dark" href="generic-class.html"><i class="icon-arrow-right"></i> Generic Class</a></li>
                        <li><a class="waves-effect waves-dark" href="gridstack.html"><i class="icon-arrow-right"></i> Grid Stack</a></li>
                        <li><a class="waves-effect waves-dark" href="modal.html"><i class="icon-arrow-right"></i> Modal</a></li>
                        <li><a class="waves-effect waves-dark" href="portlets.html"><i class="icon-arrow-right"></i> Portlets</a></li>
                        <li><a class="waves-effect waves-dark" href="sticky.html"><i class="icon-arrow-right"></i> Sticky</a></li>

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Icon</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="font-awesome.html"><i class="icon-arrow-right"></i> Font-Awesome Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="material-design-icons.html"><i class="icon-arrow-right"></i> Material Design Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="simple-line-icons.html"><i class="icon-arrow-right"></i> Simple Line Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="ion-icon.html"><i class="icon-arrow-right"></i> Ion Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="icofonts.html"><i class="icon-arrow-right"></i> Ico Fonts Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="weather-icons.html"><i class="icon-arrow-right"></i> Weather Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="typicons-icons.html"><i class="icon-arrow-right"></i> TypIcons</a></li>
                                <li><a class="waves-effect waves-dark" href="flags.html"><i class="icon-arrow-right"></i> Flags</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="echart.html"><i class="icon-arrow-right"></i> E-Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="chartjs.html"><i class="icon-arrow-right"></i> Chart Js</a></li>
                        <li><a class="waves-effect waves-dark" href="list-charts.html"><i class="icon-arrow-right"></i> List Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="knob-chart.html"><i class="icon-arrow-right"></i> Knob Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="nvd3-chart.html"><i class="icon-arrow-right"></i> nvd3 Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="peity-chart.html"><i class="icon-arrow-right"></i> Peity Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="radial-chart.html"><i class="icon-arrow-right"></i> Radial Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="rickshaw-chart.html"><i class="icon-arrow-right"></i> Rickshaw Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="sparkline-chart.html"><i class="icon-arrow-right"></i> Sparkline Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="c3chart-chart.html"><i class="icon-arrow-right"></i> c3Chart Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="map-google.html"><i class="icon-arrow-right"></i> Map Google</a></li>
                        <li><a class="waves-effect waves-dark" href="map-vector.html"><i class="icon-arrow-right"></i> Map Vector</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-materialize.html"><i class="icon-arrow-right"></i> Form Elements Material</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
                        <li><a class="waves-effect waves-dark" href="forms-wizard.html"><i class="icon-arrow-right"></i> Form Wizard</a></li>
                        <li><a class="waves-effect waves-dark" href="form-mask.html"><i class="icon-arrow-right"></i> Form Masking</a></li>
                        <li><a class="waves-effect waves-dark" href="forms-validation.html"><i class="icon-arrow-right"></i> Form Validation</a></li>
                        <li><a class="waves-effect waves-dark" href="x-editable.html"><i class="icon-arrow-right"></i> X-Editable</a></li>
                        <li><a class="waves-effect waves-dark" href="file-upload.html"><i class="icon-arrow-right"></i> File Upload</a></li>
                        <li><a class="waves-effect waves-dark" href="image-cropper.html"><i class="icon-arrow-right"></i> Image Cropper</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-list"></i><span> Tables</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="basic-table.html"><i class="icon-arrow-right"></i> Basic Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="data-table.html"><i class="icon-arrow-right"></i> Data Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="responsive-table.html"><i class="icon-arrow-right"></i> Responsive Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="editable-table.html"><i class="icon-arrow-right"></i> Editable Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="foo-tables.html"><i class="icon-arrow-right"></i> Foo Tables</a></li>
                    </ul>
                </li>

                <li class="nav-level">More</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                                <li><a class="waves-effect waves-dark" href="register2.html" target="_blank"><i class="icon-arrow-right"></i><span> Register 2</span></a></li>
                                <li><a class="waves-effect waves-dark" href="signin-up-modal.html"><i class="icon-arrow-right"></i><span> Sign In/Up with Modal </span></a></li>
                                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="login2.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 2</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="landing-page.html" target="_blank"><i class="icon-arrow-right"></i> Landing page</a></li>
                        <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
                        <li><a class="waves-effect waves-dark" href="400.html" target="_blank"><i class="icon-arrow-right"></i> Error 400</a></li>
                        <li><a class="waves-effect waves-dark" href="403.html" target="_blank"><i class="icon-arrow-right"></i> Error 403</a></li>
                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="500.html" target="_blank"><i class="icon-arrow-right"></i> Error 500</a></li>
                        <li><a class="waves-effect waves-dark" href="503.html" target="_blank"><i class="icon-arrow-right"></i> Error 503</a></li>
                        <li><a class="waves-effect waves-dark" href="gallery.html"><i class="icon-arrow-right"></i> Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                        <li><a class="waves-effect waves-dark" href="invoice.html"><i class="icon-arrow-right"></i> Invoice</a></li>
                        <li><a class="waves-effect waves-dark" href="blog.html"><i class="icon-arrow-right"></i> Blog</a></li>
                        <li><a class="waves-effect waves-dark" href="blog-detail.html"><i class="icon-arrow-right"></i> Blog Detail</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result 1</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result2.html"><i class="icon-arrow-right"></i> Search Result 2</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-social-dropbox"></i><span>Apps</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Task </span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="task-list.html"><i class="icon-arrow-right"></i> Task List</a></li>
                                <li><a class="waves-effect waves-dark" href="task-board.html"><i class="icon-arrow-right"></i> Task Board</a></li>
                                <li><a class="waves-effect waves-dark" href="task-detailed.html"><i class="icon-arrow-right"></i> Task Detailed</a></li>
                                <li><a class="waves-effect waves-dark" href="issue-list.html"><i class="icon-arrow-right"></i> Issue List</a></li>
                            </ul>
                        </li>

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Email </span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="inbox.html"><i class="icon-arrow-right"></i> Inbox</a></li>
                                <li><a class="waves-effect waves-dark" href="compose.html"><i class="icon-arrow-right"></i> Compose</a></li>
                                <li><a class="waves-effect waves-dark" href="read-mail.html"><i class="icon-arrow-right"></i> Read Mail</a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="todo.html"><i class="icon-arrow-right"></i> To Do</a></li>
                        <li><a class="waves-effect waves-dark" href="chat.html"><i class="icon-arrow-right"></i> Chat</a></li>
                        <li><a class="waves-effect waves-dark" href="ck-editor.html"><i class="icon-arrow-right"></i> CK Editor</a></li>
                        <li><a class="waves-effect waves-dark" href="wysiwyg-editor.html"><i class="icon-arrow-right"></i> wysiwyg Editor</a></li>
                        <li><a class="waves-effect waves-dark" href="ace-editor.html"><i class="icon-arrow-right"></i> Ace Editor</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-user-follow"></i><span>CRM</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="crm-dashboard.html"><i class="icon-arrow-right"></i> CRM-Dashbord</a></li>
                        <li><a class="waves-effect waves-dark" href="crm-contact.html"><i class="icon-arrow-right"></i> CRM-Contact</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-basket-loaded"></i><span>E-Commerce</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="product.html"><i class="icon-arrow-right"></i> Product</a></li>
                        <li><a class="waves-effect waves-dark" href="product-detail.html"><i class="icon-arrow-right"></i> Product Detail</a></li>
                        <li><a class="waves-effect waves-dark" href="product-list.html"><i class="icon-arrow-right"></i> Product List</a></li>
                        <li><a class="waves-effect waves-dark" href="product-edit.html"><i class="icon-arrow-right"></i> Product Edit</a></li>
                        <li><a class="waves-effect waves-dark" href="product-cart.html"><i class="icon-arrow-right"></i> Product Card</a></li>
                        <li><a class="waves-effect waves-dark" href="e-payment.html"><i class="icon-arrow-right"></i> Credit Card Form </a></li>
                    </ul>
                </li>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-job-search"></i><span>Job Search</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="job-card-view.html"><i class="icon-arrow-right"></i> Card View</a></li>
                        <li><a class="waves-effect waves-dark" href="job-details.html"><i class="icon-arrow-right"></i> Job Detailed</a></li>
                        <li><a class="waves-effect waves-dark" href="job-find.html"><i class="icon-arrow-right"></i> Job Find </a></li>
                        <li><a class="waves-effect waves-dark" href="job-panel-view.html"><i class="icon-arrow-right"></i> Job Panel View</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-share"></i><span>Social</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="profile-social.html"><i class="icon-arrow-right"></i> Profile Social</a></li>
                        <li><a class="waves-effect waves-dark" href="timeline-social.html"><i class="icon-arrow-right"></i><span> Timeline Social</span></a></li>
                        <li><a class="waves-effect waves-dark" href="wall.html"><i class="icon-arrow-right"></i><span> Wall</span></a></li>
                        <li><a class="waves-effect waves-dark" href="message.html"><i class="icon-arrow-right"></i><span> Message</span></a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-present"></i><span>Extras</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Email Template</span><span class="label label-primary menu-arrow-caption">4</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="email-confirm.html" target="_blank"><i class="icon-arrow-right"></i> Email Confirm</a></li>
                                <li><a class="waves-effect waves-dark" href="email-order-track.html" target="_blank"><i class="icon-arrow-right"></i> Email Order Track</a></li>
                                <li><a class="waves-effect waves-dark" href="email-otp.html" target="_blank"><i class="icon-arrow-right"></i> Email OTP</a></li>
                                <li><a class="waves-effect waves-dark" href="email-signup.html" target="_blank"><i class="icon-arrow-right"></i> Email Signup</a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="timeline.html"><i class="icon-arrow-right"></i> Timeline</a></li>
                        <li><a class="waves-effect waves-dark" href="maintainance.html" target="_blank"><i class="icon-arrow-right"></i> Maintainace</a></li>
                        <li><a class="waves-effect waves-dark" href="coming-soon.html" target="_blank"><i class="icon-arrow-right"></i> Coming Soon</a></li>
                        <li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
                        <li><a class="waves-effect waves-dark" href="pricing.html"><i class="icon-arrow-right"></i> Pricing</a></li>
                        <li><a class="waves-effect waves-dark" href="full-calender.html"><i class="icon-arrow-right"></i>Full Calender<span class="label label-danger menu-caption">Hot</span></a></li>
                    </ul>
                </li>


                <li><a href="Change-loges.html"><i class="icon-list"></i><span>Change Log</span><span class="label label-warning menu-caption">5</span></a> </li>
                <li class="nav-level">Menu Level</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Two
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Two</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Three
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>Level Three</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
