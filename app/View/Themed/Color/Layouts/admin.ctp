<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.3/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 22 Oct 2014 10:14:06 GMT -->
<head>
    <meta charset="utf-8" />
    <title>SMS | Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <?php echo $this->Html->css(array('jquery-ui.min', 'bootstrap.min', 'font-awesome.min', 'animate.min', 'style.min', 'style-responsive.min', 'default', 'jquery-jvectormap-1.2.2', 'bootstrap_calendar', 'jquery.gritter', 'morris'));?>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->

        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="navbar-form full-width">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <i class="fa fa-bell-o"></i>
                    <span class="label">5</span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left media-object bg-red"><i class="fa fa-bug"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports</h6>
                                <div class="text-muted">3 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted">25 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">Olivia</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted">35 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left media-object bg-green"><i class="fa fa-plus"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="pull-left media-object bg-blue"><i class="fa fa-envelope"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted">2 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/img/user-13.jpg" alt="" />
                    <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    <li><a href="javascript:;">Edit Profile</a></li>
                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li><a href="javascript:;">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:;">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end #header -->

<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
<!-- begin sidebar scrollbar -->
<div data-scrollbar="true" data-height="100%">
<!-- begin sidebar user -->
<ul class="nav">
    <li class="nav-profile">
        <div class="image">
            <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
        </div>
        <div class="info">
            Sean Ngu
            <small>Front end developer</small>
        </div>
    </li>
</ul>
<!-- end sidebar user -->
<!-- begin sidebar nav -->
<ul class="nav">
<li class="nav-header">Navigation</li>
<li class="has-sub active">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-laptop"></i>
						    <span>
						        Dashboard
					            <span class="label label-theme m-l-5">NEW</span>
					        </span>
    </a>
    <ul class="sub-menu">
        <li><a href="index.html">Dashboard v1</a></li>
        <li class="active"><a href="index_v2.html">Dashboard v2 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li>
    <a href="inbox.html">
        <span class="badge pull-right">10</span>
        <i class="fa fa-inbox"></i> <span>Inbox</span>
    </a>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-suitcase"></i>
						    <span>
						        UI Elements
					            <span class="label label-theme m-l-5">NEW</span>
						    </span>
    </a>
    <ul class="sub-menu">
        <li><a href="ui_general.html">General</a></li>
        <li><a href="ui_typography.html">Typography</a></li>
        <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
        <li><a href="ui_modal_notification.html">Modal & Notification</a></li>
        <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
        <li><a href="ui_media_object.html">Media Object</a></li>
        <li><a href="ui_buttons.html">Buttons</a></li>
        <li><a href="ui_icons.html">Icons</a></li>
        <li><a href="ui_simple_line_icons.html">Simple Line Icons <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-file-o"></i>
						    <span>
						        Form Stuff
					        </span>
    </a>
    <ul class="sub-menu">
        <li><a href="form_elements.html">Form Elements</a></li>
        <li><a href="form_plugins.html">Form Plugins</a></li>
        <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
        <li><a href="form_validation.html">Form Validation</a></li>
        <li><a href="form_wizards.html">Wizards</a></li>
        <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
        <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
        <li><a href="form_editable.html">X-Editable</a></li>
        <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-th"></i>
        <span>Tables</span>
    </a>
    <ul class="sub-menu">
        <li><a href="table_basic.html">Basic Tables</a></li>
        <li><a href="table_manage.html">Managed Tables</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-envelope"></i>
        <span>Email Template</span>
    </a>
    <ul class="sub-menu">
        <li><a href="email_system.html">System Template</a></li>
        <li><a href="email_newsletter.html">Newsletter Template</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-area-chart"></i>
						    <span>
						        Chart
					            <span class="label label-theme m-l-5">NEW</span>
						    </span>
    </a>
    <ul class="sub-menu">
        <li><a href="chart-flot.html">Flot Chart</a></li>
        <li><a href="chart-morris.html">Morris Chart <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-map-marker"></i>
        <span>Map</span>
    </a>
    <ul class="sub-menu">
        <li><a href="map_vector.html">Vector Map</a></li>
        <li><a href="map_google.html">Google Map</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-camera"></i>
						    <span>
						        Gallery
					            <span class="label label-theme m-l-5">NEW</span>
						    </span>
    </a>
    <ul class="sub-menu">
        <li><a href="gallery.html">Gallery v1</a></li>
        <li><a href="gallery_v2.html">Gallery v2 <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-cogs"></i>
						    <span>
						        Page Options
					            <span class="label label-theme m-l-5">NEW</span>
					        </span>
    </a>
    <ul class="sub-menu">
        <li><a href="page_blank.html">Blank Page</a></li>
        <li><a href="page_with_footer.html">Page with Footer</a></li>
        <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
        <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
        <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
        <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
        <li><a href="page_with_line_icons.html">Page with Line Icons <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
        <li><a href="page_full_height.html">Full Height Content <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-gift"></i>
        <span>Extra</span>
    </a>
    <ul class="sub-menu">
        <li><a href="extra_timeline.html">Timeline</a></li>
        <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
        <li><a href="extra_search_results.html">Search Results</a></li>
        <li><a href="extra_invoice.html">Invoice</a></li>
        <li><a href="extra_404_error.html">404 Error Page</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-key"></i>
        <span>Login</span>
    </a>
    <ul class="sub-menu">
        <li><a href="login.html">Login</a></li>
        <li><a href="login_v2.html">Login v2</a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-medkit"></i>
					        <span>
					            Helper
					            <span class="label label-theme m-l-5">NEW</span>
					        </span>
    </a>
    <ul class="sub-menu">
        <li><a href="helper_css.html">Predefined CSS Classes <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
    </ul>
</li>
<li class="has-sub">
    <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-align-left"></i>
        <span>Menu Level</span>
    </a>
    <ul class="sub-menu">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                Menu 1.1
            </a>
            <ul class="sub-menu">
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        Menu 2.1
                    </a>
                    <ul class="sub-menu">
                        <li><a href="javascript:;">Menu 3.1</a></li>
                        <li><a href="javascript:;">Menu 3.2</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Menu 2.2</a></li>
                <li><a href="javascript:;">Menu 2.3</a></li>
            </ul>
        </li>
        <li><a href="javascript:;">Menu 1.2</a></li>
        <li><a href="javascript:;">Menu 1.3</a></li>
    </ul>
</li>
<!-- begin sidebar minify button -->
<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
<!-- end sidebar minify button -->
</ul>
<!-- end sidebar nav -->
</div>
<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->

<!-- begin #content -->
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Dashboard</a></li>
    <li class="active">Dashboard v2</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header"><?php echo (isset($header) ? $header : 'Header'); ?></h1>
<!-- end page-header -->
<!-- Begin Content Area -->
    <div class="row">
            <?php echo $this->Session->flash(); ?>
        <div id="view-content">
            <?php echo $content_for_layout; ?>
        </div>
    </div>
<!-- end Content Area -->
</div>
<!-- end #content -->

<!-- begin theme-panel -->
<div class="theme-panel">
    <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
    <div class="theme-panel-content">
        <h5 class="m-t-0">Color Theme</h5>
        <ul class="theme-list clearfix">
            <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
            <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
        </ul>
        <div class="divider"></div>
        <div class="row m-t-10">
            <div class="col-md-5 control-label double-line">Header Styling</div>
            <div class="col-md-7">
                <select name="header-styling" class="form-control input-sm">
                    <option value="1">default</option>
                    <option value="2">inverse</option>
                </select>
            </div>
        </div>
        <div class="row m-t-10">
            <div class="col-md-5 control-label">Header</div>
            <div class="col-md-7">
                <select name="header-fixed" class="form-control input-sm">
                    <option value="1">fixed</option>
                    <option value="2">default</option>
                </select>
            </div>
        </div>
        <div class="row m-t-10">
            <div class="col-md-5 control-label double-line">Sidebar Styling</div>
            <div class="col-md-7">
                <select name="sidebar-styling" class="form-control input-sm">
                    <option value="1">default</option>
                    <option value="2">grid</option>
                </select>
            </div>
        </div>
        <div class="row m-t-10">
            <div class="col-md-5 control-label">Sidebar</div>
            <div class="col-md-7">
                <select name="sidebar-fixed" class="form-control input-sm">
                    <option value="1">fixed</option>
                    <option value="2">default</option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- end theme-panel -->

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<?php echo $this->Html->script(array('jquery-1.8.2.min', 'jquery-ui.min', 'bootstrap.min', 'jquery.slimscroll.min', 'jquery.cookie', 'login-v2.demo.min', 'apps.min', 'raphael.min', 'morris', 'jquery-jvectormap-1.2.2.min', 'jquery-jvectormap-world-merc-en', 'bootstrap_calendar.min', 'jquery.gritter', 'dashboard-v2.min', 'apps.min'));?>



<!--[if lt IE 9]>
<script src="assets/crossbrowserjs/html5shiv.js"></script>
<script src="assets/crossbrowserjs/respond.min.js"></script>
<script src="assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        App.init();
        DashboardV2.init();
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.3/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 22 Oct 2014 10:15:35 GMT -->
</html>
