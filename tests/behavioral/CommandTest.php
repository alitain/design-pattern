<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/26
 * Time: 上午8:12
 */
use Alitain\DesignPattern\Behavioral\Command\Invoker;
use Alitain\DesignPattern\Behavioral\Command\Receiver;
use Alitain\DesignPattern\Behavioral\Command\StrictStateCommand;
use \PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $receiver = new Receiver();
        $invoker = new Invoker();
        $command = new StrictStateCommand($receiver);

        $lastState = $receiver->getState();

        $invoker->run($command);
        $this->assertEquals('strict', $receiver->getState());

        $invoker->undo($command);
        $this->assertEquals($lastState, $receiver->getState());

    }
}