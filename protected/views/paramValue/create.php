<?php
/* @var $this ParamValueController */
/* @var $model ParamValue */

$this->breadcrumbs = array(
    'Param Values' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List ParamValue', 'url' => array('index')),
    array('label' => 'Manage ParamValue', 'url' => array('admin')),
);
?>

<h1>Create ParamValue</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
