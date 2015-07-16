<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use mervick\underconstruction\AssetBundle;
use common\widgets\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

AssetBundle::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body  class="external-page sb-l-c sb-r-c onload-check" style="min-height: 0px;">
<?php $this->beginBody() ?>
<div class="wrap">
    <canvas id="demo-canvas"></canvas>
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
