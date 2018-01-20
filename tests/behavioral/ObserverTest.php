<?php

namespace Alitain\DesignPattern\Tests\Behavioral\Observer;

use Alitain\DesignPattern\Behavioral\Observer\ConcreteObserver;
use Alitain\DesignPattern\Behavioral\Observer\ConcreteSubject;
use \PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: alitain
 * Date: 2018/1/20
 * Time: 下午1:33
 */
class ObserverTest extends TestCase
{
    protected $observer;

    public function setUp()
    {
        $this->observer = new ConcreteObserver();
    }

    public function testAttachDetach()
    {
        $subject = new ConcreteSubject();

        $reflection = new \ReflectionProperty($subject, 'observers');
        $reflection->setAccessible(true);
        /** @var $observers \SplObjectStorage **/
        $observers = $reflection->getValue($subject);
        $this->assertFalse($observers->contains($this->observer));

        $observers->attach($this->observer);
        $this->assertTrue($observers->contains($this->observer));

        $observers->detach($this->observer);
        $this->assertFalse($observers->contains($this->observer));
    }

    public function testNotify()
    {
        $subject = new ConcreteSubject();
        $subject->attach($this->observer);
        $subject->setState('ok');
        $subject->notify();
        $this->assertEquals('ok', $this->observer->state);
    }
}