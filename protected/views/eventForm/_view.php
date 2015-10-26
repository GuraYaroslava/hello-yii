<?php
/* @var $this EventFormController */
/* @var $data EventForm */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
    <?php echo CHtml::encode(Event::model()->findByPk($data->event_id)->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
    <?php echo CHtml::encode(Form::model()->findByPk($data->form_id)->name); ?>
    <br />

</div>
