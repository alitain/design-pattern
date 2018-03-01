<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/1
 * Time: 上午10:39
 */

namespace Alitain\DesignPattern\Structural\Adapter;


Interface TargetInterface
{
    /**
     * 抽象请求方法
     * @return mixed
     */
    public function request();
}