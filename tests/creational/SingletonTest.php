<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/22
 * Time: 下午7:47
 */
use Alitain\DesignPattern\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $this->assertInstanceOf(Singleton::class, Singleton::getInstance());
    }
}