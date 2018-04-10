<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/10
 * Time: 上午8:29
 */

namespace Alitain\DesignPattern\Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createProduct(): AbstractProduct;
}