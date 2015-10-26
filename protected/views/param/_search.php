<?php
/* @var $this ParamController */
/* @var $model Param */
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
        <?php echo $form->label($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('size' => 50,'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'param_type_id'); $param_types = ParamType::model()->findAll(); ?>
        <?php echo $form->dropDownList($model, 'param_type_id', CHtml::listData($param_types, 'id', 'name')); ?>
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
