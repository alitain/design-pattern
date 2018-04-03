<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 上午8:37
 */

namespace Alitain\DesignPattern\Behavioral\Memento;


class Originator
{
    private $state;

    /**
     * 设置备忘录，恢复状态
     *
     * @param Memento $m
     */
    public function setMemento(Memento $m)
    {
        $this->state = $m->getState();
    }

    /**
     * 设置状态
     *
     * @param $state
     * @return Memento
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this->createMemento();
    }


    /**
     * 创建备忘录
     *
     * @return Memento
     */
    public function createMemento()
    {
        return new Memento($this->state);
    }
}