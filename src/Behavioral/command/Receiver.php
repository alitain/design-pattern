<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/26
 * Time: 上午7:41
 */

namespace Alitain\DesignPattern\Behavioral\Command;


class Receiver
{
    /**
     * @var string $state 状态
     */
    private $state;

    public function __construct()
    {
        $this->state = 'normal';
    }

    /**
     * getter
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * setter
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}