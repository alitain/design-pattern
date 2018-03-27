<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/27
 * Time: 上午8:52
 */

use Alitain\DesignPattern\Structural\Facade\Facade;
use Alitain\DesignPattern\Structural\Facade\OSInterface;
use Alitain\DesignPattern\Structural\Facade\BIOSInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock('Alitain\DesignPattern\Structural\Facade\OSInterface');
        $os->method('getName')->will($this->returnValue('Linux'));

        /** @var BIOSInterface|\PHPUnit_Framework_MockObject_MockObject $bios */
        $bios = $this->getMockBuilder('Alitain\DesignPattern\Structural\Facade\BIOSInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])->disableAutoload()->getMock();
        $bios->expects($this->once())->method('launch')->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertEquals('Linux', $os->getName());
    }

}