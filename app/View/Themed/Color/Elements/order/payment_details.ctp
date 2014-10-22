<?php
$order = $this->requestAction('Orders/getAddressInfo/'.$orderId);
?>
<div class="table-warning">
    <div class="table-header">
        <div class="table-caption">
            Payment Details
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <tbody><tr>
                <td><strong>Subtotal</strong></td>
                <td>$ <?php echo h($order['Order']['subtotal']); ?></td>
            </tr>
            <tr>
                <td><strong>Sales Tax</strong></td>
                <td>$ <?php if($order['Order']['tax']){
                        echo h($order['Order']['tax']);
                    }else{
                        echo "0";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>Shipping</strong></td>
                <td>$ <?php if($order['Order']['shipping']){
                        echo h($order['Order']['shipping']);
                    }else{
                        echo "0";
                    }
                    ?>
                </td>
            </tr>
            <tr class="promo-val">
                <td class="text-danger"><strong>Promo Discount</strong></td>
                <td class="text-danger">$ <?php if($order['Promo_usage']['cut_amount']){
                        echo h($order['Promo_usage']['cut_amount']);
                    }else{
                        echo "0";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><strong>Order Total</strong></td>
                <td>$ <?php echo h($order['Order']['total']); ?></td>
            </tr>
            </tbody></table>
    </div>
    <div class="clearfix"></div>
</div>