<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 上午8:40
 */

namespace Alitain\DesignPattern\Behavioral\Memento;


class Caretaker
{
    /**
     * @var Memento[] $history
     */
    private $history = [];

    /**
     * 保存备忘录
     *
     * @param Memento $m
     */
    public function saveMemento(Memento $m)
    {
        array_push($this->history, $m);
    }

    /**
     * 撤销
     *
     * @param Originator $originator
     */
    public function undo(Originator $originator)
    {
        $originator->setMemento(array_pop($this->history));
    }
}