<?php
/* @var $this FormController */
/* @var $model Form */

$this->breadcrumbs = array(
    'Forms' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Form', 'url' => array('index')),
    array('label' => 'Create Form', 'url' => array('create')),
    array('label' => 'Update Form', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Form', 'url' => '#', 'linkOptions' => array(
        'submit' => array('delete', 'id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Form', 'url' => array('admin')),
);
?>

<h1>View Form #<?php echo $model->id; ?></h1>

<?php

$events = '';
foreach ($model->events as $key => $event)
{
    $events .= '<div><b>' . CHtml::link(CHtml::encode($event->name), array('/event/view', 'id' => $event->id)) . '</div>';
}

$params = '';
foreach ($model->params as $key => $param)
{
    $params .= '<div><b>' . CHtml::link(CHtml::encode($param->name), array('/param/view', 'id' => $param->id)) . '</div>';
}

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        array(
            'name' => 'events',
            'type' => 'raw',
            'value' => $events,
        ),
        array(
            'name' => 'params',
            'type' => 'raw',
            'value' => $params,
        )
    ),
));
?>
