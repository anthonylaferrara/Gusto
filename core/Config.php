<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/13/17
 * Time: 1:28 PM
 */

class Config
{
    private static $_instance;
    private $settings = [];

    public function __construct()
    {
        $this->id = uniqid();
        $this->settings = require ROOT . DS . 'config' . DS . 'config.php';
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    public function get($key)
    {
        if (!isset($this->settings[$key])) {
            return null;
        } else {
            return $this->settings[$key];
        }
    }
}