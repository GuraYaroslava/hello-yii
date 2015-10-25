<?php
/* @var $this EventFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array('Event Forms');

$this->menu = array(
    array('label' => 'Create EventForm', 'url' => array('create')),
    array('label' => 'Manage EventForm', 'url' => array('admin')),
);
?>

<h1>Event Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>
