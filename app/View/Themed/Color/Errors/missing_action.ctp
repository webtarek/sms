<?php $this->layout = false; ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<?php echo $this->Html->css(array('jquery-ui.min', 'bootstrap.min', 'font-awesome.min', 'animate.min', 'style.min', 'style-responsive.min', 'default', 'jquery-jvectormap-1.2.2', 'bootstrap_calendar', 'jquery.gritter', 'morris'));?>
<div class="error">
    <div class="error-code m-b-10">404 <i class="fa fa-warning"></i></div>
    <div class="error-content">
        <div class="error-message">We couldn't find it...</div>
        <div class="error-desc m-b-20">
            The page you're looking for doesn't exist. <br>
            Perhaps, there pages will help find what you're looking for.
        </div>
        <div>
            <?php echo $this->Html->link('Go Back to Home Page', array('controller' => 'users', 'action' => 'view'), array('class' => array('btn', 'btn-success'))); ?>
<!--            <a href="index.html" class="btn btn-success">Go Back to Home Page</a>-->
        </div>
    </div>
</div>
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