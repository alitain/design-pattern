<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/26
 * Time: 上午7:46
 */

namespace Alitain\DesignPattern\Behavioral\Mediator;


class ConcreteMediator implements MediatorInterface
{
    /**
     * @var ConcreteColleagueA $colleagueA
     */
    private $colleagueA;

    /**
     * @var ConcreteColleagueB $colleagueB
     */
    private $colleagueB;

    /**
     * ConcreteMediator constructor.
     * @param ConcreteColleagueA $colleagueA
     * @param ConcreteColleagueB $colleagueB
     */
    public function __construct(ConcreteColleagueA $colleagueA, ConcreteColleagueB $colleagueB)
    {
        $this->colleagueA = $colleagueA;
        $this->colleagueB = $colleagueB;
        $this->colleagueA->setMediator($this);
        $this->colleagueB->setMediator($this);
    }

    /**
     * @return string
     */
    public function wantDoJobPart1(): string
    {
        return $this->colleagueA->doJobPart1();
    }

    /**
     * @return string
     */
    public function wantDoJobPart2(): string
    {
        return $this->colleagueB->doJobPart2();
    }
}