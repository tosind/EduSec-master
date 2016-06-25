<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StuMaster */

$this->title = Yii::t('stu', 'Update Student Master: ') . ' ' . $model->stuMasterStuInfo->getName();
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Student'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Student Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stu_master_id, 'url' => ['view', 'id' => $model->stu_master_id]];
$this->params['breadcrumbs'][] = Yii::t('stu', 'Update');
?>
<div class="stu-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'info' => $info,
    ]) ?>

</div>
