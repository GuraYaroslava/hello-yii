<?php
/* @var $this ParamValueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Param Values',
);

$this->menu = array(
    array('label' => 'Create ParamValue', 'url' => array('create')),
    array('label' => 'Manage ParamValue', 'url' => array('admin')),
);
?>

<h1>Param Values</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
