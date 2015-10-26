<?php
/* @var $this ParamTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Param Types',
);

$this->menu = array(
    array('label' => 'Create ParamType', 'url' => array('create')),
    array('label' => 'Manage ParamType', 'url' => array('admin')),
);
?>

<h1>Param Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
