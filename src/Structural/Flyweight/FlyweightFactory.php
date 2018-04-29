<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/29
 * Time: 下午10:26
 */

namespace Alitain\DesignPattern\Structural\Flyweight;


class FlyweightFactory implements \Countable
{
    /**
     * @var FlyweightInterface[] $pool
     */
    private $pool;

    /**
     * get flyweight
     * @param string $name
     * @return FlyweightInterface
     */
    public function get(string $name)
    {
        if (! isset($this->pool[$name])) {
            $this->pool[$name] = new DigitFlyweight($name);
        }
        return $this->pool[$name];
    }

    /**
     * get count of pool
     * @return int
     */
    public function count(): int
    {
        return count($this->pool);
    }

}