<?php
/* @var $this ParamValueController */
/* @var $model ParamValue */

$this->breadcrumbs = array(
    'Param Values' => array('index'),
    $model->id => array('view','id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List ParamValue', 'url' => array('index')),
    array('label' => 'Create ParamValue', 'url' => array('create')),
    array('label' => 'View ParamValue', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage ParamValue', 'url' => array('admin')),
);
?>

<h1>Update ParamValue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>