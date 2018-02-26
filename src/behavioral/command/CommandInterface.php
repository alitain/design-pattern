<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/26
 * Time: 上午7:40
 */

namespace Alitain\DesignPattern\Behavioral\Command;


interface CommandInterface
{
    /**
     * 执行
     * @return mixed
     */
    public function execute();

    /**
     * 撤销
     * @return mixed
     */
    public function unExecute();
}