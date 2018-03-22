<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/26
 * Time: 上午7:40
 */

namespace Alitain\DesignPattern\Behavioral\Command;


class Invoker
{
    /**
     * @param CommandInterface $cmd
     */
    public function run(CommandInterface $cmd)
    {
        $cmd->execute();
    }

    /**
     * @param CommandInterface $cmd
     */
    public function undo(CommandInterface $cmd)
    {
        $cmd->unExecute();
    }
}