<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmpCategory */

//$this->title = 'Update Category: ' . ' ' . $model->emp_category_name;
//$this->params['breadcrumbs'][] = ['label' => 'Employee', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('emp', 'Employee Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->emp_category_name, 'url' => ['view', 'id' => $model->emp_category_id]];
$this->params['breadcrumbs'][] = Yii::t('emp', 'Update');
?>
<div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i> <?php echo Yii::t('emp', 'Update Category'); ?></h3>
  </div>
 </div>


<div class="emp-category-update">

     <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
