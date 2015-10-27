<?php
/* @var $this RegController */
/* @var $model Reg */

$this->breadcrumbs=array(
    'Regs'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'List Reg', 'url'=>array('index')),
    array('label'=>'Create Reg', 'url'=>array('create')),
    array('label'=>'View Reg', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Reg', 'url'=>array('admin')),
);
?>

<h1>Update Reg <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
