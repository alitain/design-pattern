<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/20
 * Time: 下午9:41
 */

namespace Alitain\DesignPattern\Structural\Proxy;


class RealSubject implements SubjectInterface
{

    public function request():string
    {
        return 'realSubject handled';
    }
}