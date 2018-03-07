<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/7
 * Time: 上午8:33
 */

namespace Alitain\DesignPattern\Creational\Builder;


interface BuilderInterface
{
    public function createProduct();

    public function buildPartA();

    public function buildPartB();

    public function buildPartC();

    public function getProduct(): ProductInterface;
}