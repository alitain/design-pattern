<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/29
 * Time: 下午10:25
 */

namespace Alitain\DesignPattern\Structural\Flyweight;


interface FlyweightInterface
{
    public function render(string $font): string;

}