<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/27
 * Time: 上午8:15
 */

use Alitain\DesignPattern\Creational\Prototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetObject()
    {
        $prototypeA = new Prototype\ConcretePrototypeA();
        $prototypeB = new Prototype\ConcretePrototypeB();

        $a = clone $prototypeA;
        $this->assertInstanceOf(Prototype\ConcretePrototypeA::class, $a);

        $b = clone $prototypeB;
        $this->assertInstanceOf(Prototype\ConcretePrototypeB::class, $b);
    }
}