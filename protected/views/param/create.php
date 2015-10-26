<?php
/* @var $this ParamController */
/* @var $model Param */

$this->breadcrumbs = array(
    'Params' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Param', 'url' => array('index')),
    array('label' => 'Manage Param', 'url' => array('admin')),
);
?>

<h1>Create Param</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
