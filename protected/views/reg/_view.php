<?php
/* @var $this RegController */
/* @var $data Reg */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
    <?php echo CHtml::encode(Event::model()->findByPk($data->event_id)->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
    <?php echo CHtml::encode(User::model()->findByPk($data->user_id)->username); ?>
    <br />

    <b>
    <?php echo CHtml::link(CHtml::encode('blank'), array('/user/blank', 'userId' => $data->user_id, 'eventId' => $data->event_id)); ?>
    </br>
    <br />

</div>
