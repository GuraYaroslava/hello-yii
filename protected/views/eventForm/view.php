<?php
/* @var $this EventFormController */
/* @var $model EventForm */

$this->breadcrumbs = array(
    'Event Forms' => array('index'),
    $model->id,
);

$this->menu=array(
    array('label' => 'List EventForm', 'url' => array('index')),
    array('label' => 'Create EventForm', 'url' => array('create')),
    array('label' => 'Update EventForm', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete EventForm', 'url' => '#', 'linkOptions' => array(
        'submit' => array('delete', 'id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage EventForm', 'url' => array('admin')),
);
?>

<h1>View EventForm #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'event_id',
        'form_id',
    ),
));
?>
