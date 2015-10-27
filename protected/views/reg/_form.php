<?php
/* @var $this RegController */
/* @var $model Reg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'reg-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'event_id'); $events = Event::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'event_id', CHtml::listData($events, 'id', 'name')); ?>
        <?php echo $form->error($model,'event_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'user_id'); $users = User::model()->findAll();?>
        <?php echo $form->dropDownList($model, 'user_id', CHtml::listData($users, 'id', 'username')); ?>
        <?php echo $form->error($model,'user_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
