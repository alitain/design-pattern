<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/30
 * Time: 上午10:48
 */

namespace Alitain\DesignPattern\Behavioral\State;


class OrderShipped extends AbstractOrderState
{
    public function __construct()
    {
        $this->setStatus('shipped');
    }

    public function done(OrderContext $context)
    {
        $context->setState(new OrderCompleted());
    }
}