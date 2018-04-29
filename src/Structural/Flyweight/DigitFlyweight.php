<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/29
 * Time: 下午10:25
 */

namespace Alitain\DesignPattern\Structural\Flyweight;


class DigitFlyweight implements FlyweightInterface
{
    /**
     * @var string $name
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function render(string $font): string
    {
        return sprintf('digit %s with font %s', $this->name, $font);
    }
}