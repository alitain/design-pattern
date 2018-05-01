<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/30
 * Time: 上午10:47
 */

namespace Alitain\DesignPattern\Behavioral\State;


abstract class AbstractOrderState
{
    /**
     * @var string $status
     */
    private $status;

    /**
     * status setter
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * status getter
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    abstract public function done(OrderContext $context);
}