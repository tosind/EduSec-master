<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmpMaster */


$this->title = Yii::t('emp', 'Update : ') . ' ' . $model->empMasterEmpInfo->emp_first_name." ".$model->empMasterEmpInfo->emp_last_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('emp', 'Employee'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empMasterEmpInfo->emp_first_name." ".$model->empMasterEmpInfo->emp_last_name, 'url' => ['view', 'id' => $model->emp_master_id]];
$this->params['breadcrumbs'][] = Yii::t('emp', 'Update');
?>

<div class="emp-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'info' => $info,
    ]) ?>

</div>

