<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\notice\models\NoticeCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Notice Category',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Notice Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="notice-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
