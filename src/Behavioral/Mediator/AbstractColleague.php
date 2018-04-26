<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/26
 * Time: 上午7:46
 */

namespace Alitain\DesignPattern\Behavioral\Mediator;


class AbstractColleague
{
    /**
     * @var MediatorInterface $mediator
     */
    protected $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}