<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/10
 * Time: 上午8:38
 */
use Alitain\DesignPattern\Creational\AbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testFactoryIsWorking()
    {
        $factory = new AbstractFactory\ConcreteFactory();
        $product = $factory->createProduct();
        $this->assertInstanceOf(AbstractFactory\ConcreteProduct::class, $product);

    }
}