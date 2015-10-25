<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array('Profile');

foreach(Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
}
?>

<h1>Profile of <strong><?php echo Yii::app()->user->name; ?></strong></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
