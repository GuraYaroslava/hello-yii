<?php
/* @var $this EventFormController */
/* @var $model EventForm */

$this->breadcrumbs = array(
    'Event Forms' => array('index'),
    $model->id,
);

$this->menu = array(
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
        array(
            'name' => 'event',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->event->name), array('/event/view', 'id' => $model->event->id)),
        ),
        array(
            'name' => 'form',
            'type' => 'raw',
            'value' => CHtml::link(CHtml::encode($model->form->name), array('/form/view', 'id' => $model->form->id)),
        )
    ),
));
?>
