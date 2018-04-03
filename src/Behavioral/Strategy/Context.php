<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 下午7:21
 */

namespace Alitain\DesignPattern\Behavioral\Strategy;


class Context
{
    /**
     * @var SortStrategyInterface $sortStrategy
     */
    private $sortStrategy;

    public function setStrategy(SortStrategyInterface $sortStrategy)
    {
        $this->sortStrategy = $sortStrategy;
    }

    public function executeStrategy(array $arr): array
    {
        return $this->sortStrategy->sort($arr);
    }
}