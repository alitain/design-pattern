<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/26
 * Time: 上午7:46
 */

namespace Alitain\DesignPattern\Behavioral\Mediator;


interface MediatorInterface
{
    public function wantDoJobPart1():string;
    public function wantDoJobPart2():string;
}