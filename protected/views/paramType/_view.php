<?php
/* @var $this ParamTypeController */
/* @var $data ParamType */
?>

<div class="view">

    <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
    <br />

</div>
