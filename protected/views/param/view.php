<?php
/* @var $this ParamController */
/* @var $model Param */

$this->breadcrumbs = array(
    'Params' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Param', 'url' => array('index')),
    array('label' => 'Create Param', 'url' => array('create')),
    array('label' => 'Update Param', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Param', 'url' => '#', 'linkOptions' => array(
        'submit' => array('delete','id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Param', 'url' => array('admin')),
);
?>

<h1>View Param #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        array(
            'name' => 'paramType',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->paramType->name), array('/paramType/view', 'id' => $model->paramType->id)),
        ),
        array(
            'name' => 'form',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->form->name), array('/form/view', 'id' => $model->form->id)),
        )
    ),
));
?>
