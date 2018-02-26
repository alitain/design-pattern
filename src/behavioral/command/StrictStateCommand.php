<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/26
 * Time: 上午7:45
 */

namespace Alitain\DesignPattern\Behavioral\Command;


class StrictStateCommand implements CommandInterface
{
    /**
     * @var Receiver $receiver
     */
    private $receiver;

    /**
     * @var string $lastState 命令执行前的状态
     */
    private $lastState;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $this->lastState = $this->receiver->getState();
        $this->receiver->setState('strict');
    }

    /**
     * @inheritdoc
     */
    public function unExecute()
    {
        if ($this->lastState) {
            $this->receiver->setState($this->lastState);
            $this->lastState = null;
        }
    }
}