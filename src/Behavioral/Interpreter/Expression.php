<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/25
 * Time: 上午8:29
 */

namespace Alitain\DesignPattern\Behavioral\Interpreter;


class Expression extends AbstractExpression
{
    public function interpret(Array $context): bool
    {
        $str = $context[1];
        $flags = explode(' ', $context[0]);

        if (empty($flags)) {
            return false;
        }

        $and = new AndExpression();
        $or = new OrExpression();
        $in = new InExpression();

        $res = true;
        for($i = 0; $i < count($flags); $i ++) {
            if ($flags[$i] == '&') {
                $res = $and->interpret([$res, $in->interpret([$flags[++ $i], $str])]);
            } else if ($flags[$i] == '|') {
                $res = $or->interpret([$res, $in->interpret([$flags[++ $i], $str])]);
            } else {
                $res = $in->interpret([$flags[$i], $str]);
            }
        }

        return $res;
    }
}