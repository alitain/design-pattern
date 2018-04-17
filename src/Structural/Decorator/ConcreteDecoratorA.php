<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/17
 * Time: 上午8:45
 */

namespace Alitain\DesignPattern\Structural\Decorator;


class ConcreteDecoratorA extends AbstractDecorator
{
    public function operation(): string
    {
        return $this->wrapper->operation().' after decorator A';
    }
}