<?php

namespace mervick\underconstruction;

use Yii;
use yii\base\Module as BaseModule;
use yii\helpers\Url;


/**
 * Class Module
 * @package mervick\underconstruction
 */
class Module extends BaseModule
{
    /**
     * @var bool this is the on off switch
     */
    public $locked = false;

    /**
     * @var array the list of IPs that are allowed to access site controllers.
     * Each array element represents a single IP filter which can be either an IP address
     * or an address with wildcard (e.g. 192.168.0.*) to represent a network segment.
     * The default value is `['127.0.0.1', '::1']`, which means the site can only be accessed
     * by localhost.
     */
    public $allowedIPs = ['127.0.0.1', '::1'];

    /**
     * @var string|null redirect to external url
     */
    public $redirectURL;


    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        if ($this->locked && empty($this->redirectURL)) {
            if ($app instanceof \yii\web\Application) {
                $this->redirectURL = Url::to(["/{$this->id}"]);
                $app->getUrlManager()->addRules([
                    $this->id => $this->id . '/default/index',
                ], false);
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->locked && !$this->checkAccess()) {
            Yii::$app->getResponse()->redirect($this->redirectURL);
        }

        parent::init();
    }

    /**
     * @return boolean whether the site can be accessed by the current user
     */
    protected function checkAccess()
    {
        $ip = Yii::$app->getRequest()->getUserIP();
        foreach ($this->allowedIPs as $filter) {
            if ($filter === '*' || $filter === $ip || (($pos = strpos($filter, '*')) !== false && !strncmp($ip, $filter, $pos))) {
                return true;
            }
        }

        return false;
    }
}