<?php
    $addressInfo = $this->requestAction('Orders/getAddressInfo/'.$orderId);
?>
<div class="panel panel-warning panel-dark">
    <div class="panel-heading">
        <span class="panel-title">Address Information</span>
        <div class="panel-heading-controls">
            <div class="panel-heading-icon"><i class="fa fa-inbox"></i></div>
        </div>
    </div>
    <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <fieldset class="bottom-padding">
                        <legend>Billing Address</legend>
                        <p class="nice-text">
                            <b>Billing Address: </b><?php echo h($addressInfo['Order']['billing_address']); ?><br/>
                            <b>Billing Address2: </b><?php echo h($addressInfo['Order']['billing_address2']); ?><br/>
                            <b>Billing City: </b><?php echo h($addressInfo['Order']['billing_city']); ?><br/>
                            <b>Billing Zip: </b><?php echo h($addressInfo['Order']['billing_zip']); ?><br/>
                            <b>Billing State: </b><?php echo h($addressInfo['Order']['billing_state']); ?><br/>
                            <b>Billing Country: </b><?php echo h($addressInfo['Order']['billing_country']); ?><br/>
                        </p>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="bottom-padding">
                        <legend>Shipping Address</legend>
                        <p class="nice-text">
                            <b>Shipping Address: </b><?php echo h($addressInfo['Order']['shipping_address']); ?><br/>
                            <b>Shipping Address2: </b><?php echo h($addressInfo['Order']['shipping_address2']); ?><br/>
                            <b>Shipping City: </b><?php echo h($addressInfo['Order']['shipping_city']); ?><br/>
                            <b>Shipping Zip: </b><?php echo h($addressInfo['Order']['shipping_zip']); ?><br/>
                            <b>Shipping State: </b><?php echo h($addressInfo['Order']['shipping_state']); ?><br/>
                            <b>Shipping Country: </b><?php echo h($addressInfo['Order']['shipping_country']); ?><br/>
                        </p>
                    </fieldset>
                </div>
            </div>
            <div class="clearfix"></div>
    </div>
</div>