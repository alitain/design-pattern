<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/17
 * Time: 上午8:51
 */
use Alitain\DesignPattern\Structural\Decorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    private $component;

    public function setUp()
    {
        $this->component = new Decorator\ConcreteComponent();
    }

    public function testDutyWithDecoratorA()
    {
        $withDecoratorA = new Decorator\ConcreteDecoratorA($this->component);
        $this->assertEquals('component operation after decorator A', $withDecoratorA->operation());
    }

    public function testDutyWithDecoratorB()
    {
        $withDecoratorB = new Decorator\ConcreteDecoratorB($this->component);
        $this->assertEquals('decorator B before component operation', $withDecoratorB->operation());
    }
}