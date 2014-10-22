<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.3/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 22 Oct 2014 10:25:02 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Signup Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <?php echo $this->Html->css(array('jquery-ui.min', 'bootstrap.min', 'font-awesome.min', 'animate.min', 'style.min', 'style-responsive.min', 'default'));?>
    <!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<div class="login-cover">
    <div class="login-cover-image">
        <?php echo $this->Html->image('login-bg/bg-4.jpg');
        ?></div>
    <div class="login-cover-bg"></div>
</div>
<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-v2" data-pageload-addclass="animated flipInX">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> SMS
                <small>School Management System</small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">
            <?php echo $this->Form->create('User', array('action' => 'signup'), array('class' => 'margin-bottom-0')); ?>
                <div class="form-group m-b-20">
                    <?php echo $this->Form->input('username', array('class' => array('form-control', 'input-lg')));?>
                </div>
                <div class="form-group m-b-20">
                    <?php echo $this->Form->input('password', array('class' => array('form-control', 'input-lg')));?>
                </div>
                <div class="form-group m-b-20">
                            <select name="data[User][role]" id="" class="form-control selectpicker" data-size="6" data-live-search="true" data-style="btn-info" required="required">
                                <option value="" selected>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                </div>
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Sign up</button>
                </div>
            <?php echo $this->Form->end(); ?>
            </form>
        </div>
    </div>
    <!-- end login -->

<!--    <ul class="login-bg-list">-->
<!--        <li class="active"><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-1.jpg" alt="" /></a></li>-->
<!--        <li><a href="#" data-click="change-bg"><img src="--><?php //echo $this->webroot; ?><!--img/login-bg/bg-2.jpg" alt="" /></a></li>-->
        <li><a href="#" data-click="change-bg"><img src="<?php echo $this->webroot; ?>img/login-bg/bg-3.jpg" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="<?php echo $this->webroot; ?>img/login-bg/bg-4.jpg" alt="" /></a></li>
        <li><a href="#" data-click="change-bg"><img src="<?php echo $this->webroot; ?>img/login-bg/bg-5.jpg" alt="" /></a></li>
<!--        <li><a href="#" data-click="change-bg"><img src="--><?php //echo $this->webroot; ?><!--img/login-bg/bg-6.jpg" alt="" /></a></li>-->
<!--    </ul>-->

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
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<?php echo $this->Html->script(array('jquery-1.8.2.min', 'jquery-ui.min', 'bootstrap.min', 'jquery.slimscroll.min', 'jquery.cookie', 'login-v2.demo.min', 'apps.min'));?>
<!--[if lt IE 9]>
<script src="assets/crossbrowserjs/html5shiv.js"></script>
<script src="assets/crossbrowserjs/respond.min.js"></script>
<script src="assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<!-- ================== END BASE JS ================== -->
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        LoginV2.init();
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

<!-- Mirrored from seantheme.com/color-admin-v1.3/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 22 Oct 2014 10:26:35 GMT -->
</html>
