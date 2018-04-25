<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/25
 * Time: 上午8:21
 */

namespace Alitain\DesignPattern\Behavioral\Interpreter;


class OrExpression extends AbstractExpression
{
    public function interpret(Array $context): bool
    {
        return $context[0] || $context[1];
    }
}