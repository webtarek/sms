<?php
$order = $this->requestAction('Orders/getAddressInfo/'.$orderId);
?>
<div class="table-warning">
    <div class="table-header">
        <div class="table-caption">
            Product Details
        </div>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <tbody>
        <tr>
            <th>#</th>
            <th>ITEM</th>
            <th>MEASUREMENT</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>SUBTOTAL</th>
        </tr>
        <?php foreach($order['OrderItem'] as $items): ?>
            <tr>
                <td>
                    <?php echo $this->Html->link(
                        $items['id'],
                        array('controller' => 'orderItems', 'action' => 'view', $items['id'])
                    ); ?>
                </td>
                <td>
                    <?php if(isset($items['package_id'])){
                        echo $items['name'].' (Package)';
                    }else{
                        echo $this->Html->link(
                            $items['name'],
                            array('controller' => 'orderItems', 'action' => 'view', $items['id']), array(
                                'class' => 'preview', 'data-remotecontent' => '/products/ajax_pop/'.$items['product_id']
                            )
                        );
                    }   ?>
                </td>
                <td>
                    <?php echo $items['measure_unit'];?>
                </td>
                <td>
                    $ <?php echo $items['price'];?>
                </td>
                <td>
                    <?php echo $items['quantity'];?>
                </td>
                <td>
                    $ <?php echo $items['subtotal'];?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="clearfix"></div>
</div>