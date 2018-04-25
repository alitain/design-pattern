<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/25
 * Time: 上午8:21
 */

namespace Alitain\DesignPattern\Behavioral\Interpreter;


class InExpression extends AbstractExpression
{
    public function interpret(Array $context): bool
    {
       return strpos($context[1], $context[0]) !== false;
    }
}