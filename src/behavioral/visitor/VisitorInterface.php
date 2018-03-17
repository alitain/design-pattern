<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/17
 * Time: 下午7:49
 */

namespace Alitain\DesignPattern\Behavioral\Visitor;


interface VisitorInterface
{
    public function visitConcreteElementA(ConcreteElementA $element);
    public function visitConcreteElementB(ConcreteElementB $element);
}