<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 下午7:21
 */

namespace Alitain\DesignPattern\Behavioral\Strategy;


interface SortStrategyInterface
{
    public function sort(array $arr): array;
}