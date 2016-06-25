<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StuAddress */

$this->title = Yii::t('stu','Update Stu Address:') . ' ' . $model->stu_address_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu','Stu Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stu_address_id, 'url' => ['view', 'id' => $model->stu_address_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stu-address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
