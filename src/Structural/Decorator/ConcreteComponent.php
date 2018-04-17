<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/17
 * Time: 上午8:45
 */

namespace Alitain\DesignPattern\Structural\Decorator;


class ConcreteComponent implements ComponentInterface
{
    public function operation(): string
    {
        return 'component operation';
    }
}