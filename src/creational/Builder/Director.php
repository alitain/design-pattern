<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/7
 * Time: 上午8:34
 */

namespace Alitain\DesignPattern\Creational\Builder;


class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->createProduct();
        $builder->buildPartA();
        $builder->buildPartB();
        $builder->buildPartC();

        return $builder->getProduct();
    }

}