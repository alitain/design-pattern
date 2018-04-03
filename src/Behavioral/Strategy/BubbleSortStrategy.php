<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 下午7:21
 */

namespace Alitain\DesignPattern\Behavioral\Strategy;


class BubbleSortStrategy implements SortStrategyInterface
{
    public function sort(array $arr): array
    {
        $count = count($arr);
        for ($i = 0; $i < $count - 1; $i ++) {
            $flag = true;
            for ($j = 0; $j < $count - 1 - $i; $j ++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;

                    $flag = false;
                }
            }
            if ($flag) {
                break;
            }
        }
        return $arr;
    }
}