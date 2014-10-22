<?php
/**
 * @var $this View
 */
?>
<div class="col-md-12">
    <button class="btn btn-primary pull-right"><?php echo $this->Html->link(
            'Add Users',
            array('action' => 'add')
        ) ?> </button>
    <h1>Users</h1>
    <!-- Widget starts -->
    <div class="widget">

        <div class="widget-head">
            <div class="pull-left">All users</div>
            <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="icon-remove"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="widget-content">

            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('role'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('username'); ?></th>
                    <th><?php echo $this->Paginator->sort('active'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo h($user['User']['role']); ?></td>
                        <td><?php echo h($user['User']['name']); ?></td>
                        <td><?php echo h($user['User']['username']); ?></td>
                        <td><?php echo h($user['User']['active']); ?></td>
                        <td><?php echo h($user['User']['created']); ?></td>
                        <td><?php echo h($user['User']['modified']); ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(
                                'View',
                                array('action' => 'view', $user['User']['id']),
                                array('class' => 'btn btn-default btn-xs')
                            ); ?>
                            <?php echo $this->Html->link(
                                'Change Password',
                                array('action' => 'password', $user['User']['id']),
                                array('class' => 'btn btn-default btn-xs')
                            ); ?>
                            <?php echo $this->Html->link(
                                'Edit',
                                array('action' => 'edit', $user['User']['id']),
                                array('class' => 'btn btn-default btn-xs')
                            ); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <div class="widget-foot">
                <a class="pull-right" href="#">View all brands &raquo; </a>

                <div class="clearfix"></div>

            </div>

        </div>
    </div>
</div>