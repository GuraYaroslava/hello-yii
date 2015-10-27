<?php
/* @var $this RegController */
/* @var $model Reg */

$this->breadcrumbs=array(
    'Regs'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'List Reg', 'url'=>array('index')),
    array('label'=>'Manage Reg', 'url'=>array('admin')),
);
?>

<h1>Create Reg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
