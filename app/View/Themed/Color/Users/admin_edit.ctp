<?php
/**
 * @var $this View
 */
?>
<div class="col-md-6">

    <div class="widget wviolet">
        <div class="widget-head">
            <div class="pull-left">Admin Edit User</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="icon-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            <div class="padd">
                <!--                <form class="form-horizontal" role="form">-->
                <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
                <?php echo $this->Form->input('id'); ?>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Role</label>

                    <div class="col-lg-8">
                        <?php echo $this->Form->input(
                            'role',
                            array(
                                'class' => 'form-control',
                                'label' => false,
                                'options' => array('admin' => 'admin', 'dealer' => 'dealer')
                            )
                        ); ?>
                        <!--                            <input type="text" class="form-control" placeholder="Name of brand">-->
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label">Name</label>

                    <div class="col-lg-8">
                        <?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => false)); ?>
                        <!--                            <input type="text" class="form-control" placeholder="Brand slug">-->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Username</label>

                    <div class="col-lg-8">
                        <?php echo $this->Form->input(
                            'username',
                            array('class' => 'form-control', 'label' => false)
                        ); ?>
                        <!--                            <input type="text" class="form-control" placeholder="Brand slug">-->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Active</label>

                    <div class="col-lg-8">
                        <?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => false)); ?>
                        <!--                            <input type="text" class="form-control" placeholder="Brand slug">-->
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-8">
                        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
                        <!--                            <input type="submit" class="btn btn-default" value="Add brand">-->
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
                <!--                </form>-->
            </div>
        </div>
        <div class="widget-foot">
        </div>
    </div>

</div>
<div class="col-md-6">

    <div class="widget">

        <div class="widget-head">
            <div class="pull-left">Last modified</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="icon-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">

            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tbody>
                <tr>
                    <td colspan="2">2010-03-04 02:02:03</td>
                </tr>
                </tbody>
            </table>

            <div class="widget-foot">


                <a class="pull-right" href="#">View all brands &raquo; </a>

                <div class="clearfix"></div>

            </div>

        </div>
    </div>

</div>