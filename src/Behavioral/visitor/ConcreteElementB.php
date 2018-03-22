<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/17
 * Time: 下午7:50
 */

namespace Alitain\DesignPattern\Behavioral\Visitor;


class ConcreteElementB implements ElementInterface
{
    public function accept(VisitorInterface $visitor)
    {
        $visitor->visitConcreteElementB($this);
    }

}