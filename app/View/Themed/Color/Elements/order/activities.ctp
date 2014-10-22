<?php
$activity = $this->requestAction('Orders/getActivity/');
?>
<div class="panel panel-warning panel-dark">
    <div class="panel-heading">
        <span class="panel-title">Activities</span>
        <div class="panel-heading-controls">
            <div class="panel-heading-icon"><i class="fa fa-inbox"></i></div>
        </div>
    </div>
    <div class="panel-body">
    <?php if(!empty($activity)): ?>
        <div class="media">
            <div class="media-body">
                <?php $count = 0;
                foreach ($activity as $activityList): $count++; ?>
                    <?php $userProfile = $this->Utilities->getProfileByID($activityList['Activity']['created_by']); ?>

                    <?php echo $this->Html->link(
                        $userProfile['Profile']['first_name']." ".$userProfile['Profile']['last_name'],
                        array('#'), array(
                            'class' => 'preview', 'data-remotecontent' => '/profiles/profile/'.$userProfile['Profile']['user_id']
                        )
                    ); ?>
                    <?php echo '<span style="font-size:10px;"> (' . 'From ' . $userProfile['Profile']['state'] . ')</span>'.'</ br>';
                    ?>
                    <?php if($this->Session->read('isadmin') == 2): ?>
                    <?php echo $this->Utilities->pamStatus($activityList['Activity']['pam_status']); ?>
                    <?php elseif($this->Session->read('isadmin') == 9): ?>
                    <?php echo $this->Utilities->pamStatus($activityList['Activity']['billing_status']); ?>
                    <?php elseif($this->Session->read('isadmin') == 3): ?>
                    <?php echo $this->Utilities->shippingStatus($activityList['Activity']['shipping_status']); ?>
                    <?php endif;?>
                    <p>
                        <span style="font-size: 10px;">Posted on: <?php echo $this->Utilities->getTimeBySetting( $activityList['Activity']['created']); ?></span>
                    </p>
                    <hr/>
                    <p>
                        <?php echo $activityList['Activity']['note']; ?>
                    </p>
            </div>
            <?php endforeach; ?>
        </div>
     </div>
    <?php else: ?><h4 class="not-found">Sorry, document empty</h4>
    <?php endif; ?>
</div>