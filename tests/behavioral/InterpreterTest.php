<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/25
 * Time: 上午8:51
 */

use Alitain\DesignPattern\Behavioral\Interpreter\Expression;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    public function testInterpret()
    {
        $this->assertEquals(true, (new Expression())->interpret(['a & b | c', 'adc']));
        $this->assertEquals(false, (new Expression())->interpret(['a & b | c', 'adeaf']));
        $this->assertEquals(true, (new Expression())->interpret(['a & b', 'adebf']));
    }
}