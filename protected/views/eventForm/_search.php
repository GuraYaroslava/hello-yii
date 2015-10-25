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
        <?php echo $form->label($model, 'event_id'); ?>
        <?php echo $form->textField($model, 'event_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'form_id'); ?>
        <?php echo $form->textField($model, 'form_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
