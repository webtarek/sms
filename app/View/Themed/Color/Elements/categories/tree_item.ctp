<?php echo $this->Html->link(
    $data['Category']['name'],
    array('action' => 'categories', 'action' => 'view', 'slug' => $data['Category']['slug'])
); ?>