<!--<div class="pagination">-->
<!--    --><?php //echo $this->Paginator->first('<< first', array(), null, array('class' => 'first disabled')); ?>
<!---->
<!--    --><?php //echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled')); ?>
<!---->
<!--    --><?php //echo $this->Paginator->numbers(array('separator' => ' ')); ?>
<!---->
<!--    --><?php //echo $this->Paginator->next('next >', array(), null, array('class' => 'next disabled')); ?>
<!---->
<!--    --><?php //echo $this->Paginator->last('last >>', array(), null, array('class' => 'last disabled')); ?>
<!--</div>-->

<ul class="pagination">
    <li class="disabled"><?php echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled')); ?></li>
<!--    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>-->
    <li class="inactive"><?php echo $this->Paginator->numbers(array('separator' => ' ')); ?></li>
    <li class="disabled"><?php echo $this->Paginator->next('next >', array(), null, array('class' => 'next disabled')); ?></li>
</ul>