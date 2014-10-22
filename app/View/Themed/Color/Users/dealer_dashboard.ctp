<?php $this->Html->addCrumb('Home', array('action' => 'dashboard'), array('admin' => true)); ?>
<div class="col-md-12">
    <!-- Last 10 Orders -->

    <!-- jQuery Data Tables -->
    <!-- Javascript -->
    <script>
        init.push(function () {
            $('#jq-datatables-latest-orders').dataTable();
            $('#jq-datatables-latest-orders_wrapper .table-caption').text('Last 10 Orders');
            $('#jq-datatables-latest-orders_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
        });
    </script>
    <!-- / Javascript -->
    <!-- jQuery Data Table for All Orders -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#jq-datatables-latest-orders').dataTable({
                "iDisplayLength": 50,
                "aaSorting": [
                    [ 0, "asc" ]
                ]
            }).columnFilter({aoColumns: [
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    null
                ]}
            );
        });
    </script>
    <!-- /jQuery Data Table for All Orders -->
    <div class="table-warning">
        <table class="table table-striped table-bordered table-hover" id="jq-datatables-latest-orders">
            <?php if (!empty($orders)): ?>
                <thead>
                    <tr>
                        <th style="width: 1px">Order ID</th>
                        <th>Order By</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Order ID</th>
                    <th>Order By</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </tfoot>
                    <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td>
                                <?php
                                echo $this->Html->link(
                                    $order['Order']['id'],
                                    array('controller' => 'orders', 'action' => 'order_view', $order['Order']['id']), array('class' => 'preview', 'data-remotecontent' => '/orders/order/'.$order['Order']['id'])
                                );
                                ?>
                            </td>
                            <td>
                                <?php echo $this->Html->link($order['Order']['first_name'].' '.$order['Order']['last_name'], array('#'), array('class' => 'preview', 'data-remotecontent' => '/profiles/profile/'.$order['Order']['user_id'])); ?>
                            </td>
                            <td><?php echo h($order['Order']['phone']); ?></td>
                            <td>
                                <?php
                                if ($order['Order']['status'] != null) {
                                    if($order['Order']['pam_status']==0 && $order['Order']['billing_status']==0 && $order['Order']['shipping_status']==0){
                                        echo '<label class="label yello">Waiting for PAM Approval</label>';
                                    }elseif($order['Order']['pam_status']==1 && $order['Order']['billing_status']==0){
                                        echo '<label class="label orng">Waiting for billing Approval</label>';
                                    }elseif($order['Order']['pam_status']==2 && $order['Order']['billing_status']==0){
                                        echo '<label class="label cancel">PAM Canceled</label>';
                                    }elseif($order['Order']['billing_status']==1 && $order['Order']['shipping_status']==0){
                                        echo '<label class="label label-success">Waiting for shipping label printing</label>';
                                    }elseif($order['Order']['billing_status']==2){
                                        echo '<label class="label cancel">Canceled in Billing section</label>';
                                    }elseif($order['Order']['shipping_status']==1){
                                        echo '<label class="label label-info">Label Printing</label>';
                                    }elseif($order['Order']['shipping_status']==2){
                                        echo '<label class="label label-info">Shipment Processed</label>';
                                    }elseif($order['Order']['shipping_status']==3){
                                        echo '<label class="label label-success">Received</label>';
                                    }elseif($order['Order']['shipping_status']==4){
                                        echo '<label class="label cancel">Delivery Failure</label>';
                                    }elseif($order['Order']['shipping_status']==5){
                                        echo '<label class="label label-warning">Address Mismatch</label>';
                                    }

                                } else {
                                    echo '<label class="label label">inactive</label>';
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo $this->Html->link(
                                    'View details',
                                    array('controller' => 'orders', 'action' => 'order_view', $order['Order']['id'], 'dealer' => true),
                                    array('class' => 'btn btn-warning')
                                ); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="widget-foot">
                    <?php echo $this->Html->link(
                        'View all Orders &raquo;',
                        array('controller' => 'orders', 'action' => 'index', 'dealer' => true),
                        array('class' => 'pull-right', 'escape' => false)
                    ) ?>
                    <div class="clearfix"></div>
                </div>
            <?php else: ?>
                <div class="padd"><h4 class="not-found">Sorry, Order empty</h4></div>
            <?php endif; ?>
        </div>
    </div>

</div>