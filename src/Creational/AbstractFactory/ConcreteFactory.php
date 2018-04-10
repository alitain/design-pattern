<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/10
 * Time: 上午8:30
 */

namespace Alitain\DesignPattern\Creational\AbstractFactory;


class ConcreteFactory extends AbstractFactory
{
    public function createProduct(): AbstractProduct
    {
        return new ConcreteProduct();
    }
}