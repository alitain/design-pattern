<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 下午7:21
 */

namespace Alitain\DesignPattern\Behavioral\Strategy;


class InsertSortStrategy implements SortStrategyInterface
{
    public function sort(array $arr): array
    {
        $count = count($arr);
        for ($i = 1; $i < $count; $i ++) {
            $insert = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $insert < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $j -= 1;
            }
            $arr[$j + 1] = $insert;
        }
        return $arr;
    }
}