<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/17
 * Time: 下午8:10
 */

use Alitain\DesignPattern\Behavioral\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var Visitor\ConcreteVisitor $visitor
     */
    private $visitor;

    public function setUp()
    {
        $this->visitor = new Visitor\ConcreteVisitor();
    }

    public function provideElements()
    {
        return [
            [new Visitor\ConcreteElementA()],
            [new Visitor\ConcreteElementB()],
        ];
    }

    /**
     * @dataProvider provideElements
     *
     * @param Visitor\ElementInterface $element
     */
    public function testVisitElement(Visitor\ElementInterface $element)
    {
        $element->accept($this->visitor);
        $this->assertSame($element, $this->visitor->getVisited()[0]);
    }
}