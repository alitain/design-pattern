<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/7
 * Time: 上午8:34
 */

namespace Alitain\DesignPattern\Creational\Builder;


interface ProductInterface
{
    public function setPartA();
    public function setPartB();
    public function setPartC();
}