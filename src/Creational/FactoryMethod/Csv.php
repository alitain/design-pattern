<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/3
 * Time: 下午8:17
 */

namespace Alitain\DesignPattern\Creational\FactoryMethod;


class Csv implements DocumentInterface
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