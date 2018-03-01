<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/1
 * Time: 上午10:40
 */

namespace Alitain\DesignPattern\Structural\Adapter;


class Adapter implements TargetInterface
{
    /**
     * @var Adaptee $adaptee
     */
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @inheritdoc
     */
    public function request()
    {
        return $this->adaptee->specialRequest();
    }
}