<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/17
 * Time: 下午7:49
 */

namespace Alitain\DesignPattern\Behavioral\Visitor;


class ConcreteVisitor implements VisitorInterface
{
    /**
     * @var VisitorInterface []
     */
    private $visited = [];

    /**
     * @param ConcreteElementA $element
     */
    public function visitConcreteElementA(ConcreteElementA $element)
    {
        $this->visited[] = $element;
    }

    /**
     * @param ConcreteElementB $element
     */
    public function visitConcreteElementB(ConcreteElementB $element)
    {
        $this->visited[] = $element;
    }

    /**
     * @return VisitorInterface []
     */
    public function getVisited(): array
    {
        return $this->visited;
    }

}