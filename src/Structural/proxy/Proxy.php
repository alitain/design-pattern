<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/20
 * Time: 下午9:41
 */

namespace Alitain\DesignPattern\Structural\Proxy;


class Proxy implements SubjectInterface
{
    /**
     * @var RealSubject $realSubject
     */
    private $realSubject;

    public function __construct($realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request():string
    {
        return $this->realSubject->request();
    }

}