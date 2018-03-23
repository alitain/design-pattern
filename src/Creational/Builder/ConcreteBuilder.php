<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/7
 * Time: 上午8:33
 */

namespace Alitain\DesignPattern\Creational\Builder;


class ConcreteBuilder implements BuilderInterface
{
    /**
     * @var ProductInterface $product
     */
    private $product;

    public function createProduct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
       $this->product->setPartA();
    }

    public function buildPartB()
    {
        $this->product->setPartB();
    }

    public function buildPartC()
    {
        $this->product->setPartC();
    }

    public function getProduct(): ProductInterface
    {
        return $this->product;
    }
}