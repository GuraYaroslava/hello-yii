<?php
/* @var $this ParamTypeController */
/* @var $model ParamType */

$this->breadcrumbs = array(
    'Param Types' => array('index'),
    $model->name => array('view','id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List ParamType', 'url' => array('index')),
    array('label' => 'Create ParamType', 'url' => array('create')),
    array('label' => 'View ParamType', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage ParamType', 'url' => array('admin')),
);
?>

<h1>Update ParamType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
