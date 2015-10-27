<?php
/* @var $this RegController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Regs',
);

$this->menu=array(
    array('label'=>'Create Reg', 'url'=>array('create')),
    array('label'=>'Manage Reg', 'url'=>array('admin')),
);
?>

<h1>Regs</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
));
?>
