<?php
/**
 * Created by PhpStorm.
 * User: alitain
 * Date: 2018/1/20
 * Time: 下午1:12
 */

namespace Alitain\DesignPattern\Behavioral\Observer;

class ConcreteSubject implements \SplSubject
{
    /**
     * 所有的观察者
     *
     * @var \SplObjectStorage
     */
    protected $observers;

    /**
     * 将要同步的状态
     *
     * @var
     */
    private $state;

    /**
     * ConcreteSubject constructor.
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * 设置状态
     *
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * 获取状态
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 注册观察者
     *
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * 删除观察者
     *
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * 通知所有的观察者
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}