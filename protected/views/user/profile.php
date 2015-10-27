<?php
/* @var $this UserController */
/* @var $model User */
/* @var $events array */

$this->breadcrumbs = array('Profile');

foreach(Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
}
?>

<h1>Profile of <strong><?php echo Yii::app()->user->name; ?></strong></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>

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
