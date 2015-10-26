<?php
/* @var $this ParamTypeController */
/* @var $model ParamType */

$this->breadcrumbs = array(
    'Param Types' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List ParamType', 'url' => array('index')),
    array('label' => 'Create ParamType', 'url' => array('create')),
    array('label' => 'Update ParamType', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete ParamType', 'url' => '#', 'linkOptions' => array(
        'submit' => array('delete','id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage ParamType', 'url' => array('admin')),
);
?>

<h1>View ParamType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
    ),
));
?>
