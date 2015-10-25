<?php
/* @var $this EventFormController */
/* @var $data EventForm */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
    <?php echo CHtml::encode($data->event_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
    <?php echo CHtml::encode($data->form_id); ?>
    <br />

</div>