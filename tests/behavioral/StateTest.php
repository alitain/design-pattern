<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/30
 * Time: 下午11:06
 */

use Alitain\DesignPattern\Behavioral\State;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testOrderCanBeCreatedAndShipped()
    {
        $context = new State\OrderContext();
        $context->setState(new State\OrderCreated());

        $this->assertEquals('created', $context->getStatus());

        $context->next();
        $this->assertEquals('shipped', $context->getStatus());
    }

    public function testOrderCanBeCompleted()
    {
        $context = new State\OrderContext();
        $context->setState(new State\OrderCreated());

        $context->next();
        $context->next();

        $this->assertEquals('completed', $context->getStatus());
    }
}