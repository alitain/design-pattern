<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/1
 * Time: 上午10:40
 */

namespace Alitain\DesignPattern\Structural\Adapter;


class Adaptee
{
    /**
     * 特定请求
     * @return string
     */
    public function specialRequest()
    {
        return 'special request';
    }
}