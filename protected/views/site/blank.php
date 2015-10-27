<?php
/* @var $this SiteController */
/* @var $event array */

$this->pageTitle = Yii::app()->name . ' - Blank';
$this->breadcrumbs = array('Blank');

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerCoreScript('jquery.ui');

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->baseUrl.'/js/script.js');
$cs->registerCssFile(
    Yii::app()->clientScript->getCoreScriptUrl().
    '/jui/css/base/jquery-ui.css'
);
?>

<h4><b><?php echo strtoupper($event->name); ?></b></h4>
<div id="blank"></div>

<script type="text/javascript">
    var ulForms = $("<ul/>");
    $(ulForms).appendTo("#blank");
    $("<div/>", {id: "tabs"}).appendTo("#blank");
</script>

<?php
    foreach ($event->forms as $key => $form) {?>
        <script type="text/javascript">
            var aForm = $("<a/>", {href: "#form-"+<?php echo $form->id; ?>}).text("<?php echo $form->name; ?>");
            $(ulForms).append($("<li/>").append(aForm));
            var divTabForm = $("<div/>", {id: "form-"+<?php echo $form->id; ?>, class: "form"});
            $("#tabs").append(divTabForm);
        </script>

        <?php foreach ($form->params as $key => $param) { ?>
            <script type="text/javascript">
                $(divTabForm).append(drawParam(<?=CJSON::encode($param) ?>, false));
            </script>
        <?php }
    }
?>

<button id="save">Save</button>

<script type="text/javascript">
    $("#blank").tabs();
    $("#save").click(function(){
        var values = getFormData("blank");
        console.log(JSON.stringify(values));
        if (!values) return false;

        $.ajax({
            method: 'POST',
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl("site/blank", array("id"=>$event->id)); ?>',
            async: false,
            data: {'data': values},
            dataType: 'json',
            ContentType: "application/json; charset=utf-8",
            success: function(data) {
                $("#blank").empty();
                $("#save").hide();
                $("#blank").text("Ok.");
            },
            error: function(ajaxRequest, ajaxOptions, thrownError) {
                console.log(thrownError);
                console.log(ajaxOptions);
                console.log(ajaxRequest);
                alert(ajaxRequest["responseText"]);
            }
        });
    });
</script>
