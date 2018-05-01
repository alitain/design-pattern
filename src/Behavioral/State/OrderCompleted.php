<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/30
 * Time: 上午10:48
 */

namespace Alitain\DesignPattern\Behavioral\State;


class OrderCompleted extends AbstractOrderState
{
    public function __construct()
    {
        $this->setStatus('completed');
    }

    public function done(OrderContext $context)
    {
    }
}