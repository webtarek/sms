<?php $this->Html->addCrumb('Home', array('action' => 'dashboard'), array('admin' => true)); ?>
<div class="col-lg-6">
    <div class="table-info">
        <div class="table-header">
            <div class="table-caption">
                Recent Orders
            </div>
        </div>
        <?php if (!empty($orders)): ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order BY</th>
                    <th>Total Price</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($orders as $ordersList):?>
                    <tr>
                        <td>
                            <?php
                            echo $this->Html->link(
                                $ordersList['Order']['id'],
                                array('controller' => 'orders', 'action' => 'view', $ordersList['Order']['id']), array('class' => 'preview', 'data-remotecontent' => '/orders/order/'.$ordersList['Order']['id'])
                            );
                            ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($ordersList['Order']['first_name'].' '.$ordersList['Order']['last_name'], array('#'), array('class' => 'preview', 'data-remotecontent' => '/profiles/profile/'.$ordersList['Order']['user_id'])); ?>
                        </td>
                        <td>
                            $ <?php echo $ordersList['Order']['total'];  ?>
                        </td>
                        <td>
                            <?php echo $this->Utilities->getTimeBySetting(
                                $ordersList['Order']['created']
                            ); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link(
                                'View Details',
                                array('controller' => 'orders', 'action' => 'view', $ordersList['Order']['id']),
                                array('class' => 'btn btn-default btn-xs')
                            ); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h4 class="not-found">Sorry! order not found.</h4>
        <?php endif; ?>
        <?php if ($orders): ?>
            <div class="table-footer">
                <?php echo $this->Html->link(
                    'View all Orders &raquo;',
                    array('controller' => 'orders', 'action' => 'index'),
                    array('class' => 'pull-right', 'escape' => false)
                ) ?>
                <div class="clearfix"></div>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="col-lg-6">
    <div class="table-success">
        <div class="table-header">
            <div class="table-caption">
                Recent Order Items
            </div>
        </div>
        <?php if (!empty($ordersItems)): ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($ordersItems as $ordersItemList):?>
                    <tr>
                        <td>
                            <?php echo $this->Html->link(
                                $ordersItemList['OrderItem']['name'],
                                array('controller' => 'orderItems', 'action' => 'view', $ordersItemList['OrderItem']['id']), array('class' => 'preview', 'data-remotecontent' => '/products/ajax_pop/'.$ordersItemList['OrderItem']['product_id'])
                            ); ?>
                        </td>
                        <td>
                            $ <?php echo $ordersItemList['OrderItem']['price'];?>
                        </td>
                        <td>
                            <?php echo $this->Html->link(
                                'View',
                                array('controller' => 'orderItems','action' => 'view', $ordersItemList['OrderItem']['id']),
                                array('class' => 'btn btn-default btn-xs')
                            ); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h4 class="not-found">Sorry! order not found.</h4>
        <?php endif; ?>
        <?php if ($orders): ?>
            <div class="table-footer">
                <?php echo $this->Html->link(
                    'View all Order items &raquo;',
                    array('controller' => 'orderItems', 'action' => 'index'),
                    array('class' => 'pull-right', 'escape' => false)
                ) ?>
                <div class="clearfix"></div>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-lg-12">
    <div class="table-danger">
        <div class="table-header">
            <div class="table-caption">
                Recent Products
            </div>
        </div>
        <?php if (!empty($products)): ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Measurement</th>
                    <th>Views</th>
                </tr>
                </thead>
                <tbody>
                <?php $pid = 0; ?>
                <?php foreach ($products as $product): ?>
                    <?php $pid = $pid + 1; ?>
                    <tr>
                        <td><?php echo $pid; ?></td>
                        <td><?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', $product['Product']['id']), array('class' => 'preview', 'data-remotecontent' => '/products/ajax_pop/'.$product['Product']['id'])); ?></td>
                        <td>$ <?php echo h($product['Product']['price']); ?></td>
                        <td><?php echo h($product['Product']['measure_value'])." ".h($product['Product']['measure_unit']); ?></td>
                        <td><?php echo h($product['Product']['views']); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h4 class="not-found">Sorry! order not found.</h4>
        <?php endif; ?>
        <?php if ($orders): ?>
            <div class="table-footer">
                <?php echo $this->Html->link(
                    'View all Products &raquo;',
                    array('controller' => 'products', 'action' => 'index'),
                    array('class' => 'pull-right', 'escape' => false)
                ) ?>
                <div class="clearfix"></div>
            </div>
        <?php endif; ?>
    </div>
</div>