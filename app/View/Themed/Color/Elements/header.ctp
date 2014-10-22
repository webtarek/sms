<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
    <meta charset="utf-8"/>
    <title>Test</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/plugins/font-awesome/css/font-awesome.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/plugins/bootstrap/css/bootstrap.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/plugins/uniform/css/uniform.default.css"
          rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/style-metronic.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/style.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/style-responsive.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/plugins.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/themes/default.css" rel="stylesheet"
          type="text/css" id="style_color"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/pages/profile.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/css/custom.css" rel="stylesheet"
          type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="header-inner">
<!-- BEGIN LOGO -->
<a class="navbar-brand" href="">
    <?php echo $this->Html->image($this->webroot . 'img/small-logo.png', array('class' => 'img-responsive')); ?>
</a>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <img src="<?php echo $this->webroot; ?>shaharia-theme-asset/assets/img/menu-toggler.png" alt=""/>
</a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
<ul class="nav navbar-nav pull-right">
<!-- BEGIN NOTIFICATION DROPDOWN -->
<!--<li class="dropdown" id="header_notification_bar">-->
<!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
<!--        <i class="fa fa-warning"></i>-->
<!--					<span class="badge">-->
<!--						 6-->
<!--					</span>-->
<!--    </a>-->
<!--    <ul class="dropdown-menu extended notification">-->
<!--        <li>-->
<!--            <p>-->
<!--                You have 14 new notifications-->
<!--            </p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <ul class="dropdown-menu-list scroller" style="height: 250px;">-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-success">-->
<!--										<i class="fa fa-plus"></i>-->
<!--									</span>-->
<!--                        New user registered.-->
<!--									<span class="time">-->
<!--										 Just now-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-danger">-->
<!--										<i class="fa fa-bolt"></i>-->
<!--									</span>-->
<!--                        Server #12 overloaded.-->
<!--									<span class="time">-->
<!--										 15 mins-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-warning">-->
<!--										<i class="fa fa-bell-o"></i>-->
<!--									</span>-->
<!--                        Server #2 not responding.-->
<!--									<span class="time">-->
<!--										 22 mins-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-info">-->
<!--										<i class="fa fa-bullhorn"></i>-->
<!--									</span>-->
<!--                        Application error.-->
<!--									<span class="time">-->
<!--										 40 mins-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-danger">-->
<!--										<i class="fa fa-bolt"></i>-->
<!--									</span>-->
<!--                        Database overloaded 68%.-->
<!--									<span class="time">-->
<!--										 2 hrs-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-danger">-->
<!--										<i class="fa fa-bolt"></i>-->
<!--									</span>-->
<!--                        2 user IP blocked.-->
<!--									<span class="time">-->
<!--										 5 hrs-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-warning">-->
<!--										<i class="fa fa-bell-o"></i>-->
<!--									</span>-->
<!--                        Storage Server #4 not responding.-->
<!--									<span class="time">-->
<!--										 45 mins-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-info">-->
<!--										<i class="fa fa-bullhorn"></i>-->
<!--									</span>-->
<!--                        System Error.-->
<!--									<span class="time">-->
<!--										 55 mins-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="label label-icon label-danger">-->
<!--										<i class="fa fa-bolt"></i>-->
<!--									</span>-->
<!--                        Database overloaded 68%.-->
<!--									<span class="time">-->
<!--										 2 hrs-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="external">-->
<!--            <a href="#">-->
<!--                See all notifications <i class="m-icon-swapright"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
<!-- END NOTIFICATION DROPDOWN -->
<!-- BEGIN INBOX DROPDOWN -->
<!--<li class="dropdown" id="header_inbox_bar">-->
<!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
<!--        <i class="fa fa-envelope"></i>-->
<!--					<span class="badge">-->
<!--						 5-->
<!--					</span>-->
<!--    </a>-->
<!--    <ul class="dropdown-menu extended inbox">-->
<!--        <li>-->
<!--            <p>-->
<!--                You have 12 new messages-->
<!--            </p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <ul class="dropdown-menu-list scroller" style="height: 250px;">-->
<!--                <li>-->
<!--                    <a href="inbox14c8.html?a=view">-->
<!--									<span class="photo">-->
<!--										<img src="-->
<?php //echo $this->webroot;?><!--shaharia-theme-asset/assets/img/avatar2.jpg" alt=""/>-->
<!--									</span>-->
<!--									<span class="subject">-->
<!--										<span class="from">-->
<!--											 Lisa Wong-->
<!--										</span>-->
<!--										<span class="time">-->
<!--											 Just Now-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="message">-->
<!--										 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="inbox14c8.html?a=view">-->
<!--									<span class="photo">-->
<!--										<img src="-->
<?php //echo $this->webroot;?><!--shaharia-theme-asset/assets/img/avatar3.jpg" alt=""/>-->
<!--									</span>-->
<!--									<span class="subject">-->
<!--										<span class="from">-->
<!--											 Richard Doe-->
<!--										</span>-->
<!--										<span class="time">-->
<!--											 16 mins-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="message">-->
<!--										 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="inbox14c8.html?a=view">-->
<!--									<span class="photo">-->
<!--										<img src="-->
<?php //echo $this->webroot;?><!--shaharia-theme-asset/assets/img/avatar1.jpg" alt=""/>-->
<!--									</span>-->
<!--									<span class="subject">-->
<!--										<span class="from">-->
<!--											 Bob Nilson-->
<!--										</span>-->
<!--										<span class="time">-->
<!--											 2 hrs-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="message">-->
<!--										 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="inbox14c8.html?a=view">-->
<!--									<span class="photo">-->
<!--										<img src="-->
<?php //echo $this->webroot;?><!--shaharia-theme-asset/assets/img/avatar2.jpg" alt=""/>-->
<!--									</span>-->
<!--									<span class="subject">-->
<!--										<span class="from">-->
<!--											 Lisa Wong-->
<!--										</span>-->
<!--										<span class="time">-->
<!--											 40 mins-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="message">-->
<!--										 Vivamus sed auctor 40% nibh congue nibh...-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="inbox14c8.html?a=view">-->
<!--									<span class="photo">-->
<!--										<img src="-->
<?php //echo $this->webroot;?><!--shaharia-theme-asset/assets/img/avatar3.jpg" alt=""/>-->
<!--									</span>-->
<!--									<span class="subject">-->
<!--										<span class="from">-->
<!--											 Richard Doe-->
<!--										</span>-->
<!--										<span class="time">-->
<!--											 46 mins-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="message">-->
<!--										 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="external">-->
<!--            <a href="inbox.html">-->
<!--                See all messages <i class="m-icon-swapright"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
<!-- END INBOX DROPDOWN -->
<!-- BEGIN TODO DROPDOWN -->
<!--<li class="dropdown" id="header_task_bar">-->
<!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
<!--        <i class="fa fa-tasks"></i>-->
<!--					<span class="badge">-->
<!--						 5-->
<!--					</span>-->
<!--    </a>-->
<!--    <ul class="dropdown-menu extended tasks">-->
<!--        <li>-->
<!--            <p>-->
<!--                You have 12 pending tasks-->
<!--            </p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <ul class="dropdown-menu-list scroller" style="height: 250px;">-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 New release v1.2-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 30%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress">-->
<!--										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 40% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 Application deployment-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 65%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress progress-striped">-->
<!--										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 65% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 Mobile app release-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 98%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress">-->
<!--										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 98% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 Database migration-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 10%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress progress-striped">-->
<!--										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 10% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 Web server upgrade-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 58%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress progress-striped">-->
<!--										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 58% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 Mobile development-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 85%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress progress-striped">-->
<!--										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 85% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--									<span class="task">-->
<!--										<span class="desc">-->
<!--											 New UI release-->
<!--										</span>-->
<!--										<span class="percent">-->
<!--											 18%-->
<!--										</span>-->
<!--									</span>-->
<!--									<span class="progress progress-striped">-->
<!--										<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">-->
<!--											<span class="sr-only">-->
<!--												 18% Complete-->
<!--											</span>-->
<!--										</span>-->
<!--									</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li class="external">-->
<!--            <a href="#">-->
<!--                See all tasks <i class="m-icon-swapright"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
<!-- END TODO DROPDOWN -->
<!-- BEGIN USER LOGIN DROPDOWN -->
<li class="dropdown user">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <?php if($this->Session->read('Auth.User.Profile.url')):?>
            <img src="<?php echo 'http://accounts'.env('HTTP_BASE').'/images/profile/'.$this->Session->read('Auth.User.Profile.url')?>" class="rounded">
        <?php else:?>
            <?php echo $this->Html->image(
                'demo/avatars/avatar.jpg',
                array('alt' => 'Pixel Admin', 'class' => 'rounded')
            ); ?>
        <?php endif;?>

					<span class="username">
						 <?php echo $uname['Profile']['first_name']; ?><?php echo " " . $uname['Profile']['last_name']; ?>
					</span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <!--            <a href="extra_profile.html">-->
            <a href="">
                <i class="fa fa-user"></i> My Profile
            </a>
        </li>
        <!--        <li>-->
        <!--            <a href="page_calendar.html">-->
        <!--                <i class="fa fa-calendar"></i> My Calendar-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li>-->
        <!--            <a href="inbox.html">-->
        <!--                <i class="fa fa-envelope"></i> My Inbox-->
        <!--							<span class="badge badge-danger">-->
        <!--								 3-->
        <!--							</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li>-->
        <!--            <a href="#">-->
        <!--                <i class="fa fa-tasks"></i> My Tasks-->
        <!--							<span class="badge badge-success">-->
        <!--								 7-->
        <!--							</span>-->
        <!--            </a>-->
        <!--        </li>-->

        <!--        <li>-->
        <!--            <a href="#">-->
        <!--                <i class="fa fa-tasks"></i> My Tasks-->
        <!--							<span class="badge badge-success">-->
        <!--								 7-->
        <!--							</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <li>
            <a href="#">
                <i class="fa fa-tasks"></i> Settings

            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab_3-3">
                <i class="fa fa-lock"></i> Change Password
            </a>
        </li>
        <li class="divider">
        </li>
        <!--        <li>-->
        <!--            <a href="javascript:;" id="trigger_fullscreen">-->
        <!--                <i class="fa fa-arrows"></i> Full Screen-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li>-->
        <!--            <a href="extra_lock.html">-->
        <!--                <i class="fa fa-lock"></i> Lock Screen-->
        <!--            </a>-->
        <!--        </li>-->
        <li>
            <!--            <a href="login.html">-->
            <!--                <i class="fa fa-key"></i> Log Out-->
            <!--            </a>-->
            <?php echo $this->Html->link(
                '<i class="fa fa-key "></i> Logout',
                array('controller' => 'Users', 'action' => 'logout'),
                array('escape' => false)
            ); ?>
        </li>
    </ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
</ul>
<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->