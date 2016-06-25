<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('dash', 'Manage Events');
$this->params['breadcrumbs'][] = ['label' => Yii::t('dash', 'Dashboard'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content-header">
<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">
		<?php echo Yii::t('dash', 'Manage Events') ?>
	</h2>
  </div><!-- /.col -->
</div>
</section>



<?php if(\Yii::$app->session->hasFlash('maxEvent'))
      {
?>
<div class="col-xs-12 no-padding">
    <div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php echo \Yii::$app->session->getFlash('maxEvent'); ?>
    </div>
</div>
<?php
      }
?>
<section class="content">

<div class="box box-solid box-warning">
  <div class="box-header">
    <h3 class="box-title"><i class="ion ion-calendar"></i> <?php echo Yii::t('dash', 'Event Schedule') ?></h3>
  </div><!-- /.box-header -->
  <div class="box-body">
   <div class="events-index">
    <?php
	$AEurl = Url::to(["events/add-event"]);
	$UEurl = Url::to(["events/update-event"]);
	$AddEvent = Yii::t('dash', 'Add Event');
	$JSEvent = <<<EOF
function(start, end, allDay) {
	var start = moment(start).unix();
   	var end = moment(end).unix();
	$.ajax({
	   url: "{$AEurl}",
	   data: { start_date : start, end_date : end },
	   type: "GET",
	   success: function(data) {
		   $(".modal-body").addClass("row");
		   $(".modal-header").html('<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3>{$AddEvent}</h3>');
		   $('.modal-body').html(data);
		   $('#eventModal').modal();
	   }
   	});
		}
EOF;
$updateEvent = Yii::t('dash', 'Update Event');
	$JSEventClick = <<<EOF
function(calEvent, jsEvent, view) {
    var eventId = calEvent.id;
	$.ajax({
	   url: "{$UEurl}",
	   data: { event_id : eventId },
	   type: "GET",
	   success: function(data) {
		   $(".modal-body").addClass("row");
		   $(".modal-header").html('<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3> {$updateEvent} </h3>');
		   $('.modal-body').html(data);
		   $('#eventModal').modal();
	   }
   	});
	$(this).css('border-color', 'red');
}
EOF;
	$eDetail = Yii::t('app', 'Event Detail');
	$eType = Yii::t('app', 'Event Type');
	$eStart = Yii::t('app', 'Start Time');
	$eEnd = Yii::t('app', 'End Time');
	$JsF = <<<EOF
		function (event, element) {
			var start_time = moment(event.start).format("DD-MM-YYYY, h:mm:ss a");
		    	var end_time = moment(event.end).format("DD-MM-YYYY, h:mm:ss a");

			element.popover({
		            title: event.title,
		            placement: 'top',
		            html: true,
			    global_close: true,
			    container: 'body',
			    trigger: 'hover',
			    delay: {"show": 500},
		            content: "<table class='table'><tr><th> {$eDetail} : </th><td>" + event.description + " </td></tr><tr><th> {$eType} : </th><td>" + event.event_type + "</td></tr><tr><th> {$eStart} : </t><td>" + start_time + "</td></tr><tr><th> {$eEnd} : </th><td>" + end_time + "</td></tr></table>"
        		});
               }
EOF;
    ?>

    <?= \yii2fullcalendar\yii2fullcalendar::widget([
			'options' => ['language' => 'en'],
			'clientOptions' => [
				'fixedWeekCount' => false,
				'weekNumbers'=>true,
				'editable' => true,
				'selectable' => true,
				'eventLimit' => true,
				'eventLimitText' => 'more Events',
				'selectHelper' => true,
				'header' => [
					'left' => 'today prev,next',
					'center' => 'title',
					'right' => 'month,agendaWeek,agendaDay'
				],
				'select' =>  new \yii\web\JsExpression($JSEvent),
				'eventClick' => new \yii\web\JsExpression($JSEventClick),
				'eventRender' => new \yii\web\JsExpression($JsF),
				'aspectRatio' => 2,
				'timeFormat' => 'hh(:mm) A'
			],
			'ajaxEvents' => Url::toRoute(['/dashboard/events/view-events'])
	]); ?>
   </div>
   <div class="row">
	<ul class="legend">
	    <li><span class="holiday"></span> <?php echo Yii::t('dash', 'Holiday') ?></li>
	    <li><span class="importantnotice"></span> <?php echo Yii::t('dash', 'Important Notice') ?></li>
	    <li><span class="meeting"></span> <?php echo Yii::t('dash', 'Meeting') ?></li>
	    <li><span class="messages"></span> <?php echo Yii::t('dash', 'Messages') ?></li>
	</ul>
   </div>
  </div>
</div>
</section>
<style>
.fc-content {
    font-size: 13px;
    font-weight: bold;
    padding: 2px;
}

.closon {
    position: absolute;
    top: -2px;
    right: 0;
    cursor: pointer;
    background-color: #FFF
}
.popover{
    max-width:450px;
}
</style>
<?php
	yii\bootstrap\Modal::begin([
		'id' => 'eventModal',
		//'header' => "<div class='row'><div class='col-xs-6'><h3>Add Event</h3></div><div class='col-xs-6'>".Html::a('Delete', ['#'], ['class' => 'btn btn-danger pull-right', 'style' => 'margin-top:5px'])."</div></div>",
		'header' => "<h3>".Yii::t('dash', 'Add Event')."</h3>",
	]);

	yii\bootstrap\Modal::end();
?>
  
