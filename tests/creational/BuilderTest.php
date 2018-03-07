<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/7
 * Time: 上午8:45
 */

use PHPUnit\Framework\TestCase;
use Alitain\DesignPattern\Creational\Builder\ConcreteBuilder;
use Alitain\DesignPattern\Creational\Builder\Director;
use \Alitain\DesignPattern\Creational\Builder\Product;

class BuilderTest extends TestCase
{
    public function testProductBuild()
    {
        $builder = new ConcreteBuilder();
        $director = new Director();
        $product = $director->build($builder);

        $this->assertInstanceOf(Product::class, $product);
    }
}