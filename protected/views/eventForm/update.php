<?php
/* @var $this EventFormController */
/* @var $model EventForm */

$this->breadcrumbs = array(
    'Event Forms' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List EventForm', 'url' => array('index')),
    array('label' => 'Create EventForm', 'url' => array('create')),
    array('label' => 'View EventForm', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage EventForm', 'url' => array('admin')),
);
?>

<h1>Update EventForm <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
