<?php

use Yii;
use yii\helpers\Html;
$this->title = Yii::t('modules/underconstruction', 'Site Under Construction!');
?>
<div class="content">
    <div class="logo"></div>
    <div class="container">
        <h1><?= Yii::t('modules/underconstruction', 'Site Under Construction!') ?></h1>
        <p><?= Yii::t('modules/underconstruction', 'Our site is under construction and will be ready for some time.') ?></p>
        <p><?= Yii::t('modules/underconstruction', 'Our contacts:') ?></p>
        <p><?= Yii::t('modules/underconstruction', 'E-mail:') ?>
            <a href="mailto:<?= Yii::$app->params['adminEmail'] ?>"><?= Yii::$app->params['adminEmail'] ?></a>
        </p>
    </div>
</div>
