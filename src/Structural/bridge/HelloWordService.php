<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/13
 * Time: 上午8:08
 */

namespace Alitain\DesignPattern\Structural\Bridge;


class HelloWordService extends AbstractService
{
    public function get(): string
    {
        return $this->implementation->format('hello world');
    }
}