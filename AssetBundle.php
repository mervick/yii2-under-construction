<?php

namespace mervick\underconstruction;

/**
 * Class AssetBundle
 * @package mervick\underconstruction
 */
class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'canvasbg.js',
        'underconstruction.js',
    ];
    /**
     * @inheritdoc
     */
    public $css = [
        'underconstruction.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}

