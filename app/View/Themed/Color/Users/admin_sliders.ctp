<div class="row">
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="http://www.nerdoholic.com/wp-content/uploads/2014/01/Samsung-Galaxy-S6.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="http://www.nerdoholic.com/wp-content/uploads/2014/01/Samsung-Galaxy-S6.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="http://www.nerdoholic.com/wp-content/uploads/2014/01/Samsung-Galaxy-S6.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
            <img src="http://www.nerdoholic.com/wp-content/uploads/2014/01/Samsung-Galaxy-S6.jpg" alt="...">
        </a>
    </div>
    ...
</div>

<div class="col-md-6">

    <div class="widget wviolet">
        <div class="widget-head">
            <div class="pull-left">Upload Logo</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="icon-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">
            <div class="padd">
                <!--                <form class="form-horizontal" role="form">-->
                <?php echo $this->Form->create(
                    'Store_settings',
                    array('type' => 'file', array('class' => 'form-horizontal'))
                ); ?>
                <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
                <!--                --><?php //echo $this->Form->input('slug', array()); ?>

                <div class="form-group">
                    <label class="col-lg-4 control-label">LOGO</label>

                    <div class="col-lg-8">
                        <?php echo $this->Form->input('image', array('type' => 'file', 'label' => false)); ?>
                        <!--                            <input type="image" class="form-control" placeholder="Tag slug">-->
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-8">
                        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-default')); ?>
                        <!--                            <input type="submit" class="btn btn-default" value="Add Photo">-->
                    </div>
                </div>
                <div class="clearfix"></div>
                <?php echo $this->Form->end(); ?>
                <!--                </form>-->
            </div>
        </div>
        <div class="widget-foot">

        </div>
    </div>

</div>