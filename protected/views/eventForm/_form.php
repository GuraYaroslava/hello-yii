<?php
/* @var $this EventFormController */
/* @var $model EventForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'event-form-form',
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'event_id'); $events = Event::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'event_id', CHtml::listData($events, 'id', 'name')); ?>
        <?php echo $form->error($model, 'event_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'form_id'); $forms = Form::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'form_id', CHtml::listData($forms, 'id', 'name')); ?>
        <?php echo $form->error($model, 'form_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
