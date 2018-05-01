<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/30
 * Time: 上午10:47
 */

namespace Alitain\DesignPattern\Behavioral\State;


class OrderContext
{

    /**
     * @var AbstractOrderState $state;
     */
    private $state;

    public function setState(AbstractOrderState $state)
    {
        $this->state = $state;
    }

    public function getStatus()
    {
        return $this->state->getStatus();
    }

    public function next()
    {
        $this->state->done($this);
    }
}