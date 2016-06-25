<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StuGuardians */

$this->title = Yii::t('stu', 'Create Stu Guardians');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Stu Guardians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-guardians-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
