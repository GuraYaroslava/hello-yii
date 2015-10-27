<?php
/* @var $this SiteController */
/* @var $data array */

$this->pageTitle = Yii::app()->name . ' - Blank';
$this->breadcrumbs = array(
    'Blanks' => array('blanks'),
    'Blank',
);

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerCoreScript('jquery.ui');

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->baseUrl.'/js/script.js');
$cs->registerCssFile(
    Yii::app()->clientScript->getCoreScriptUrl().
    '/jui/css/base/jquery-ui.css'
);
?>

<h4><b><?php echo strtoupper($data[0]["event_name"]); ?></b></h4>
<div id="blank"></div>

<script type="text/javascript">
    showBlank(<?=CJSON::encode($data);?>);
    $("#blank").tabs();
</script>
