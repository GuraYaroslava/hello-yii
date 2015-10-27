<?php
/* @var $this ParamValueController */
/* @var $data ParamValue */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('param_id')); ?>:</b>
    <?php echo CHtml::encode(Param::model()->findByPk($data->param_id)->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
    <?php echo CHtml::encode($data->value); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('reg_id')); ?>:</b>
    <?php echo CHtml::encode($data->reg_id); ?>
    <br />

</div>
