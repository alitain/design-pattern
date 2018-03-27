<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/27
 * Time: 上午8:46
 */

namespace Alitain\DesignPattern\Structural\Facade;


class Facade
{
    /**
     * @var OSInterface $os
     */
    private $os;

    /**
     * @var BIOSInterface $bios
     */
    private $bios;

    /**
     * Facade constructor.
     * @param BIOSInterface $bios
     * @param OSInterface $os
     */
    public function __construct(BIOSInterface $bios, OSInterface $os)
    {
        $this->bios  = $bios;
        $this->os = $os;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }

}