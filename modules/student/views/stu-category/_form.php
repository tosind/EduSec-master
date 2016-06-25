<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StuCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-xs-12 col-lg-12">
  <div class="<?php echo $model->isNewRecord ? 'box-success' : 'box-info'; ?> box view-item col-xs-12 col-lg-12">
   <div class="stu-category-form">
     <?php
	if($this->context->action->id == 'update')
		$action = ['update', 'id'=>$_REQUEST['id']];
	else
		$action = ['create'];
    ?>
    <?php $form = ActiveForm::begin([
			'id' => 'stu-category-form',
			'enableAjaxValidation' => true,
			'action' => $action,
			'fieldConfig' => [
			    'template' => "{input}{error}",
			],
    ]); ?>

    <?= $form->field($model, 'stu_category_name')->textInput(['maxlength' => 50, 'placeholder' => $model->getAttributeLabel('stu_category_name')]) ?>

    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
	<div class="col-xs-6">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('stu','Create') : Yii::t('stu','Update'), ['class' => $model->isNewRecord  ? 'btn btn-block btn-success' : 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-6">
	<?= Html::resetButton(Yii::t('stu','Reset'), ['class' => 'btn btn-default btn-block']) ?>
	</div>
    </div>

    <?php ActiveForm::end(); ?>
   </div>
  </div>
</div>
