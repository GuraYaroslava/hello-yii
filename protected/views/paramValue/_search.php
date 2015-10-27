<?php
/* @var $this ParamValueController */
/* @var $model ParamValue */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'param_id'); ?>
        <?php echo $form->textField($model,'param_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'reg_id'); ?>
        <?php echo $form->textField($model,'reg_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'value'); ?>
        <?php echo $form->textArea($model,'value',array('rows' => 6, 'cols' => 50)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
