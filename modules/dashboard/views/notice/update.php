<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Notice */

$this->title = Yii::t('dash', 'Update Notice: ') . ' ' . $model->notice_title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('dash', 'Dashboard'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('dash', 'Notice List'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notice_title, 'url' => ['view', 'id' => $model->notice_id]];
$this->params['breadcrumbs'][] = Yii::t('dash', 'Update');
?>
<div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-edit"></i> <?php echo Yii::t('dash', 'Update Notice') ?></h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('dash', 'Back'), ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
   </div>
</div>

<div class="notice-update">
      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
