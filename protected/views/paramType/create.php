<?php
/* @var $this ParamTypeController */
/* @var $model ParamType */

$this->breadcrumbs = array(
    'Param Types' => array('index'),
    'Create',
);

$this->menu=array(
    array('label' => 'List ParamType', 'url' => array('index')),
    array('label' => 'Manage ParamType', 'url' => array('admin')),
);
?>

<h1>Create ParamType</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
