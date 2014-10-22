<?php
$newAction = 1;
$anchorText = '<span class="label label-info"><i class="icon icon-check"></i></span> Turn On Store';

if($storeSettings['Setting']['value'] == 1){
    $newAction = 0;
    $anchorText = '<span class="label label-danger"><i class="icon icon-power-off"></i></span> Turn off Store';
}

echo $this->Js->link(
    $anchorText,
    array('admin' => true, 'action' => 'storeStatus', $newAction),
    array(
        'escape' => false,
        'id' => 'store-off-link',
        'update' => '#store-off-link',
        'before' => $this->Js->get('#busy-indicator')->effect(
                'fadeIn',
                array('buffer' => false)
            ),
        'complete' => $this->Js->get('#busy-indicator')->effect(
                'fadeOut',
                array('buffer' => false)
            ),
    )
);
?>
<?php echo $this->Js->writeBuffer(); ?>