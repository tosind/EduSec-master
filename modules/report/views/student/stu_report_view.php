<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\modules\student\models\StuInfo;
use app\modules\student\models\StuMaster;
use app\modules\course\models\Courses;
use app\modules\course\models\Batches;
use app\modules\course\models\Section;
use app\models\City;

$this->title = Yii::t('report', 'Student Info Report');
$this->params['breadcrumbs'][] = ['label' => Yii::t('report', 'Reports'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<h2 class="page-header">
	<i class="fa fa-info-circle"></i> <?php echo Yii::t('report', 'Student Info Report'); ?>
</h2>

<?php if(\Yii::$app->getSession()->hasFlash('studerror')) : ?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<?= \Yii::$app->getSession()->getFlash('studerror'); ?>
</div>
<?php endif; ?>

<div class="box box-info box-solid">
   <div class="box-header with-border">
 	<h4 class="box-title"><i class="fa fa-search"></i> <?php echo Yii::t('report', 'Select Criteria'); ?></h4>
   </div>
   <?php $form = ActiveForm::begin(['id' => 'stu_info-form',]); ?>
   <div class="box-body">
      <div class="row">
	<div class="col-xs-12 col-sm-4 col-lg-4">
	<?= $form->field($model, 'stu_master_course_id')->dropDownList(ArrayHelper::map(app\modules\course\models\Courses::find()->where(['is_status' => 0])->all(),'course_id','course_name'),
		[
                    'prompt'=>Yii::t('course', '--- Select Course ---'),
		    'required'=>'true',
                    'onchange'=>'
                        $.get( "'.Url::toRoute('dependent/studbatch').'", { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#'.Html::getInputId($model, 'report_batch_id').'" ).html( data );
                            }
                        );
                    '
                ]); ?>
	</div>
	<div class="col-xs-12 col-sm-4 col-lg-4">
		 <?= $form->field($model, 'report_batch_id')->dropDownList([],
			[
		            'prompt'=>Yii::t('stu', '--- Select Batch ---'),
			    'onchange'=>'
		                $.get( "'.Url::toRoute('dependent/studsection').'", { id: $(this).val() } )
		                    .done(function( data ) {
		                        $( "#'.Html::getInputId($model, 'report_section_id').'" ).html( data );
		                    }
                        );'
                ]); ?>
	</div>
	<div class="col-xs-12 col-sm-4 col-lg-4">
	    <?= $form->field($model, 'report_section_id')->dropDownList([''=>Yii::t('stu', '--- Select Section ---')]); ?>
	</div>
      </div>
      <div class="row">
	<div class="col-xs-12 col-sm-4 col-lg-4">
		 <?= $form->field($model,'report_city')->dropDownList(ArrayHelper::map(\app\models\City::findAll(['is_status'=>0]),'city_id','city_name'), ['prompt' => Yii::t('stu', '--- Select City ---')]);?>
	</div>
	<div class="col-xs-12 col-sm-4 col-lg-4">
		 <?= $form->field($info, 'stu_gender')->dropDownList(stuInfo::getGenderOptions(),['prompt' => Yii::t('stu', '--- Select Gender ---')]) ?>
	</div>
      </div>
      <hr>
      <div class="row">
		<?php echo $this->render('stu_select_form', []); ?>
      </div>
   </div> <!--/ box-body -->
   <div class="box-footer">
	<?= Html::submitButton(Yii::t('report', 'Generate') , ['class' => 'btn generate btn-success' ]) ?>
   <?php ActiveForm::end(); ?>
</div> <!--/ box -->
