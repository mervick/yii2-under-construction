<?php

use Yii;
use yii\helpers\Html;
$this->title = Html::encode(Yii::t('underconstruction', 'Site Under Construction!'));
?>
<div class="content">
    <div class="logo"></div>
    <div class="container">
        <h1><?= Yii::t('underconstruction', 'Site Under Construction!') ?></h1>
        <p><?= Yii::t('underconstruction', 'Our site is under construction and will be ready for some time.') ?></p>
        <p><?= Yii::t('underconstruction', 'Our contacts:') ?></p>
        <p><?= Yii::t('underconstruction', 'E-mail:') ?>
            <a href="mailto:<?= Yii::$app->params['adminEmail'] ?>"><?= Yii::$app->params['adminEmail'] ?></a>
        </p>
    </div>
</div>
