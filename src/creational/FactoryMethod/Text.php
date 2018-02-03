<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/3
 * Time: 下午7:53
 */

namespace Alitain\DesignPattern\creational\FactoryMethod;

class Text implements DocumentInterface
{
    /**
     * @inheritdoc
     */
    public function open()
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function load($path)
    {
    }

    /**
     * @inheritdoc
     */
    public function close()
    {
    }
}