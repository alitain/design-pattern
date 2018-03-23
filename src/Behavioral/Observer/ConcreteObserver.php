<?php
/**
 * Created by PhpStorm.
 * User: alitain
 * Date: 2018/1/20
 * Time: 下午1:04
 */

namespace Alitain\DesignPattern\Behavioral\Observer;

class ConcreteObserver implements \SplObserver
{
    /**
     * 观察者的状态
     *
     * @var
     */
    public $state;

    /**
     * 更新的方法
     *
     * @param \SplSubject $splSubject
     */
    public function update(\SplSubject $splSubject)
    {
        $this->state = $splSubject->getState();
    }
}