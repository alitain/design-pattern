<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/1
 * Time: 上午10:55
 */

use Alitain\DesignPattern\Structural\Adapter;
use \PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testTargetRequest()
    {
        $adaptee = new Adapter\Adaptee();

        $adapter = new Adapter\Adapter($adaptee);

        $this->assertEquals($adaptee->specialRequest(), $adapter->request());
    }
}