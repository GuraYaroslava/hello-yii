<?php
/* @var $this ParamValueController */
/* @var $model ParamValue */

$this->breadcrumbs = array(
    'Param Values' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List ParamValue', 'url' => array('index')),
    array('label' => 'Create ParamValue', 'url' => array('create')),
    array('label' => 'Update ParamValue', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete ParamValue', 'url' => '#', 'linkOptions' => array(
        'submit' => array('delete','id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage ParamValue', 'url' => array('admin')),
);
?>

<h1>View ParamValue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'param_id',
        'reg_id',
        'value',
    ),
)); ?>
