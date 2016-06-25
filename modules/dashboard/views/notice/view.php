<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Notice */

$this->title = $model->notice_title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('dash', 'Dashboard'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('dash', 'Notice List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-search"></i> <?php echo Yii::t('dash', 'View Notice') ?></h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('dash', 'Back'), ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('dash', 'Update'), ['update', 'id' => $model->notice_id], ['class' => 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a(Yii::t('dash', 'Delete'), ['delete', 'id' => $model->notice_id], [
            'class' => 'btn btn-block btn-danger',
            'data' => [
                'confirm' => Yii::t('dash', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?> 
	</div>
  </div>
</div>

<div class="col-xs-12">
  <div class="box box-primary view-item">
   <div class="notice-view">
    <?= DetailView::widget([
        'model' => $model,
	'options'=>['class'=>'table  detail-view'],
        'attributes' => [
            'notice_title',
            'notice_description',
	    [
		 'attribute' => 'notice_user_type',
		 'value' => ( ($model->notice_user_type == 'S') ? 'Student' : (($model->notice_user_type == 'E') ? "Employee" : (($model->notice_user_type == 'P') ? "Parent" : "All Users") ) ),
	    ],
	    [
		'attribute' => 'notice_date',
		'value' => Yii::$app->formatter->asDate($model->notice_date),
		'format' => 'raw',
	    ],
	    [
            	'attribute' => 'notice_file_path',
		'format' => 'raw',
		'value' =>  (!empty($model->notice_file_path) ? Html::a($model->notice_file_path, ['notice-file', 'nid' => $model->notice_id], $htmlOptions=["target"=>"_blank", 'data' => ['method' => 'post',]]) : " - ")
	    ],
            [
		'attribute' => 'created_at',
		'value' => Yii::$app->formatter->asDateTime($model->created_at),
	    ],
        [
		'attribute' => 'created_by',
		'value' => $model->createdBy->user_login_id,
	    ],
	    [
		'attribute' => 'updated_at',
		'value' => ($model->updated_at == null) ? " - ": Yii::$app->formatter->asDateTime($model->updated_at),
	    ],
	    [
		'attribute' => 'updated_by',
        'value' => ($model->updated_by == null) ? " - ": $model->updatedBy->user_login_id,
	    ],
        ],
    ]) ?>
   </div>
 </div>
</div>
