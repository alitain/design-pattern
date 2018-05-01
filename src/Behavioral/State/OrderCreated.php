<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/30
 * Time: 上午10:47
 */

namespace Alitain\DesignPattern\Behavioral\State;


class OrderCreated extends AbstractOrderState
{
    public function __construct()
    {
        $this->setStatus('created');
    }

    public function done(OrderContext $context)
    {
        $context->setState(new OrderShipped());
    }
}