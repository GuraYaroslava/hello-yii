<?php
/* @var $this UserController */
/* @var $model User */
/* @var $events array */

$this->breadcrumbs = array('Blanks');
?>

<h1>List of <strong>Blanks!!!</string></h1>
<?php
    foreach ($events as $key => $event) {
        $this->widget('zii.widgets.CDetailView',
            array(
                'data' => $event,
                'attributes' => array(
                    array(
                        'name' => 'event',
                        'type' => 'raw',
                        'value' => CHtml::link(
                            CHtml::encode($event['name']),
                            array('/user/blank', 'userId' => $model->id, 'eventId' => $event['id'])
                        ),
                    )
                )
            )
        );
    }
?>
