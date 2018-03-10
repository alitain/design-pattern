<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/9
 * Time: 下午9:35
 */

namespace Alitain\DesignPattern\Behavioral\ChainOfResponsibility;


abstract class AbstractHandler
{
    /**
     * @var AbstractHandler $successor
     */
    protected $successor;

    /**
     * @param AbstractHandler $successor
     */
    final public function setSuccessor(AbstractHandler $successor)
    {
        $this->successor = $successor;
    }

    /**
     * @param Request $request
     * @return string
     */
    final public function handle(Request $request)
    {
        $ret = $this->process($request);
        if ($this->successor) {
            $ret = $this->successor->handle($request);
        }
        return $ret;
    }

    /**
     * @param Request $request
     */
    abstract public function process(Request $request);
}