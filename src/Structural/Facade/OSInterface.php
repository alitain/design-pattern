<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/27
 * Time: 上午8:46
 */

namespace Alitain\DesignPattern\Structural\Facade;


interface OSInterface
{
    public function halt();

    public function getName(): string;

}