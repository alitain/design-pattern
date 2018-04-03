<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 下午7:37
 */

use Alitain\DesignPattern\Behavioral\Strategy;
use PHPUnit\Framework\TestCase;

class strategyTest extends TestCase
{
    private $origin = [2, 1, 4, 3];

    private $expect  = [1, 2, 3, 4];

    public function testSortUseDifferentStrategies()
    {
        $context = new Strategy\Context();
        $context->setStrategy(new Strategy\BubbleSortStrategy());
        $arr = $context->executeStrategy($this->origin);

        $this->assertEquals($this->expect, $arr);

        $context->setStrategy(new Strategy\InsertSortStrategy());
        $arr = $context->executeStrategy($this->origin);

        $this->assertEquals($this->expect, $arr);

    }
}