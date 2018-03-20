<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/20
 * Time: 下午9:45
 */

use Alitain\DesignPattern\Structural\Proxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testRequestHandled()
    {
        $proxy = new Proxy\Proxy(new Proxy\RealSubject());

        $this->assertEquals('realSubject handled', $proxy->request());
    }
}