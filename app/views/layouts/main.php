<?php

use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="dzlin php project">
        <meta name="keywords" content="php project">
        <meta name="renderer" content="webkit">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?= $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
