<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/27
 * Time: 上午8:46
 */

namespace Alitain\DesignPattern\Structural\Facade;


interface BIOSInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OSInterface $os);

    public function powerDown();
}