<?php

namespace pkorniev\TelegramBotSimple;


use Yii;
use yii\base\Component;
use yii\web\Request as WebRequest;
use yii\httpclient\Client;

/**
 */
class Bot
{

    private static $instance;

    private $token;

    private $update;


    public static function setInstance($token)
    {
        static::$instance = new self();
        static::$instance->token = $token;
    }

    public static function getInstance()
    {
        return static::$instance;
    }

    public static function getUpdates()
    {}


}
