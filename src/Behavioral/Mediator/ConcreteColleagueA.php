<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/26
 * Time: 上午7:47
 */

namespace Alitain\DesignPattern\Behavioral\Mediator;


class ConcreteColleagueA extends AbstractColleague
{

    /**
     * @return string
     */
    public function doJob()
    {
        return $this->doJobPart1() . $this->mediator->wantDoJobPart2();
    }

    /**
     * @return string
     */
    public function doJobPart1():string
    {
        return 'job is';
    }

}