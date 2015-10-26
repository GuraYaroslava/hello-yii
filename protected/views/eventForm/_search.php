<?php
/* @var $this EventFormController */
/* @var $model EventForm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'event_id'); $events = Event::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'event_id', CHtml::listData($events, 'id', 'name')); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'form_id'); $forms = Form::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'form_id', CHtml::listData($forms, 'id', 'name')); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
