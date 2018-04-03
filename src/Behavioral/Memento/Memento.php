<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 上午8:40
 */

namespace Alitain\DesignPattern\Behavioral\Memento;


class Memento
{
    /**
     * 原发器的状态
     */
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * getter
     * @return mixed
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