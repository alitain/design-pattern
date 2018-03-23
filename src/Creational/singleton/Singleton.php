<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/22
 * Time: 下午7:43
 */

namespace Alitain\DesignPattern\Creational\Singleton;


class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    /**
     * 获取实例
     * @return Singleton
     */
    public static function getInstance():Singleton
    {
        if (! self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}