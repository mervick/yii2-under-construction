<?php

namespace mervick\underconstruction\controllers;

use Yii;
use yii\web\Controller;


/**
 * Class DefaultController
 * @package mervick\underconstruction\controllers
 */
class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
}