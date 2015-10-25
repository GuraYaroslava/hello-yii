<?php
/* @var $this EventFormController */
/* @var $model EventForm */

$this->breadcrumbs = array(
    'Event Forms' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List EventForm', 'url' => array('index')),
    array('label' => 'Manage EventForm', 'url' => array('admin')),
);
?>

<h1>Create EventForm</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
