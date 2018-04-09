<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/9
 * Time: 上午8:54
 */
use Alitain\DesignPattern\Behavioral\TemplateMethod\ConcreteClass;
use PHPUnit\Framework\TestCase;

class templateMethodTest extends TestCase
{
    public function testTemplateMethodCalled()
    {
        $concrete = new ConcreteClass();
        $ret = $concrete->templateMethod();

        $this->assertEquals('Concrete A And Concrete B', $ret);
    }
}