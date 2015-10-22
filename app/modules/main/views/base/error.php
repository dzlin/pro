<?php

use yii\helpers\Html;

$this->title = $name;

?>
<style>
    .alert {
        padding: 20px;
    }
    .alert-danger {
        background-color: #f2dede;
    }
</style>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>


</div>
