<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/26
 * Time: 上午7:47
 */

namespace Alitain\DesignPattern\Behavioral\Mediator;


class ConcreteColleagueB extends AbstractColleague
{
    /**
     * @return string
     */
    public function doJobPart2():string
    {
        return ' done!';
    }

}