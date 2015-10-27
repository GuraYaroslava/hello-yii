<?php
/* @var $this RegController */
/* @var $model Reg */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'event_id'); $events = Event::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'event_id', CHtml::listData($events, 'id', 'name')); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'user_id'); $users = User::model()->findAll();?>
        <?php echo $form->dropDownList($model, 'user_id', CHtml::listData($users, 'id', 'username')); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
