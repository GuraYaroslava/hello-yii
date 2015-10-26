<?php
/* @var $this ParamController */
/* @var $data Param */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('param_type_id')); ?>:</b>
    <?php echo CHtml::encode(ParamType::model()->findByPk($data->param_type_id)->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
    <?php echo CHtml::encode(Form::model()->findByPk($data->form_id)->name); ?>
    <br />

</div>
