<?php
/* @var $this ParamValueController */
/* @var $model ParamValue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'param-value-form',
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'param_id'); ?>
        <?php echo $form->textField($model,'param_id'); ?>
        <?php echo $form->error($model,'param_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'reg_id'); ?>
        <?php echo $form->textField($model,'reg_id'); ?>
        <?php echo $form->error($model,'reg_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'value'); ?>
        <?php echo $form->textArea($model,'value',array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model,'value'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
