<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/17
 * Time: 上午8:45
 */

namespace Alitain\DesignPattern\Structural\Decorator;


abstract class AbstractDecorator implements ComponentInterface
{
    protected $wrapper;

    public function __construct(ComponentInterface $wrapper)
    {
        $this->wrapper = $wrapper;
    }
}