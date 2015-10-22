<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\notice\models\NoticeCategory */

$this->title = Yii::t('app', 'Create Notice Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Notice Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notice-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
