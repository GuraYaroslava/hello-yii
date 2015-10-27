<?php
/* @var $this RegController */
/* @var $model Reg */

$this->breadcrumbs=array(
    'Regs'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'List Reg', 'url'=>array('index')),
    array('label'=>'Create Reg', 'url'=>array('create')),
    array('label'=>'Update Reg', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Reg', 'url'=>'#', 'linkOptions'=>array(
        'submit'=>array('delete','id'=>$model->id),
        'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Reg', 'url'=>array('admin')),
);
?>

<h1>View Reg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        array(
            'name' => 'event',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->event->name), array('/event/view', 'id' => $model->event->id)),
        ),
        array(
            'name' => 'user',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->user->username), array('/user/view', 'id' => $model->user->id)),
        )
    ),
));
?>
