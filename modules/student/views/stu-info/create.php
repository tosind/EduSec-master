<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StuInfo */

$this->title = Yii::t('stu', 'Create Stu Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Stu Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
