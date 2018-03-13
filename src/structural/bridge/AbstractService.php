<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/13
 * Time: 上午8:08
 */

namespace Alitain\DesignPattern\Structural\Bridge;


abstract class AbstractService
{
    /**
     * @var FormatterInterface $implementation
     */
    protected $implementation;

    /**
     * setter
     * @param FormatterInterface $imp
     */
    public function setImplementation(FormatterInterface $imp)
    {
        $this->implementation = $imp;
    }

    abstract public function get(): string;
}