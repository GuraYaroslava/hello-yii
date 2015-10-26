<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs = array(
    'Events' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Event', 'url' => array('index')),
    array('label' => 'Create Event', 'url' => array('create')),
    array('label' => 'Update Event', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Event', 'url' => '#', 'linkOptions' => array(
        'submit' => array('delete', 'id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Event', 'url' => array('admin')),
);
?>

<h1>View Event #<?php echo $model->id; ?></h1>

<?php

$forms = '';
foreach ($model->forms as $key => $form)
{
    $forms .= '<div><b>' . CHtml::link(CHtml::encode($form->name), array('/form/view', 'id' => $form->id)) . '</div>';
}

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'name',
        array(
            'name' => 'forms',
            'type' => 'raw',
            'value' => $forms,
        )
    ),
));
?>
