<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/9
 * Time: 上午8:47
 */

namespace Alitain\DesignPattern\Behavioral\TemplateMethod;


class ConcreteClass extends AbstractClass
{
    public function primitiveOperationA(): string
    {
        return 'Concrete A';
    }

    public function primitiveOperationB(): string
    {
        return 'Concrete B';
    }
}