<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmpDocs */
/* @var $form yii\widgets\ActiveForm */

$this->title =$model->empMasterEmpInfo->emp_first_name." ".$model->empMasterEmpInfo->emp_last_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('emp', 'Employee'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
 	var imageTypes = ['jpeg', 'jpg', 'png', 'gif']; //Validate the images to show
        function showImage(src, target)
        {
            var fr = new FileReader();
            fr.onload = function(e)
            {
                target.src = this.result;
            };
            fr.readAsDataURL(src.files[0]);
        }
        var uploadImage = function(obj)
        {
            var val = obj.value;
            var lastInd = val.lastIndexOf('.');
            var ext = val.slice(lastInd + 1, val.length);
            if (imageTypes.indexOf(ext) !== -1)
            {
                var id = $(obj).data('target');                    
                var src = obj;
                var target = $(id)[0];                    
                showImage(src, target);
            }
        }


$( document ).ready(function() {
	$('#<?php echo Html::getInputId($info, "emp_photo"); ?>').bootstrapFileInput();
	
});
</script>

<style>
.emp-photo-form .file-input-wrapper {
    float: none;
    margin-top: 2%;
    width: auto;
}
</style>
<div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i>
	<?= Html::encode($this->title) ?> </h3>
	<button type="button" class="close <?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'; ?>" data-dismiss="modal" aria-label="Close">x</button>
  </div>
</div>

<div class="col-xs-12 col-lg-12">
  <div class="box box-info box-solid view-item col-xs-12 col-lg-12 no-padding">
   <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-picture-o"></i>&nbsp; <?php echo Yii::t('emp', 'Profile Photo'); ?></h4>
   </div>
   <div class="box-body">
    <div class="emp-photo-form">
    <?php $form = ActiveForm::begin([
			'id' => 'emp-photo-form',
			'options' => ['enctype' => 'multipart/form-data'],
			'fieldConfig' => [
			    'template' => "{input}{error}",
			],			
    ]); ?>
   
    <div class="col-xs-12 col-md-12 text-center">
	<?php echo Html::img($info->getEmpPhoto($info->emp_photo), ["width"=>"150px", "height"=>"150px", 'alt'=>'No Image', 'id'=>'aImgShow']); ?>  
    </div>

    <div class="col-xs-12 col-sm-12 col-lg-12 text-center no-padding"> 
	<?= $form->field($info,'emp_photo')->fileInput(['data-filename-placement' => "inside", 'title' => Yii::t('stu', 'Browse Photo'), 'onchange'=>'uploadImage(this)', 'data-target'=>'#aImgShow']) ?>
    </div>

    <div class="hint col-xs-12 col-sm-12" style="color:red;padding-top:15px"><b><?php echo Yii::t('emp', 'Note'); ?>:- </b>&nbsp;<?php echo Yii::t('emp', 'Only Upload Jpeg, Jpg, Png, Gif Type'); ?>
    </div>
 
    <div class="form-group col-xs-12 col-sm-12 no-padding edusecArLangCss">
	<hr>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('emp', 'Create') : Yii::t('emp', 'Update'), ['class' => $model->isNewRecord  ? 'btn btn-success' : 'btn btn-info']) ?>
    </div>
    <?php ActiveForm::end(); ?>   
    </div><!---./end emp-photo-form--->
   </div><!---./end box-body--->
  </div><!---./end box--->   
</div><!---./end col--->
