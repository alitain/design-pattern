<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/29
 * Time: 下午10:35
 */

use Alitain\DesignPattern\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $digits = [
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
    ];

    private $fonts = ['Arial', 'Verdana'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->digits as $digit) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($digit);

                $this->assertEquals(sprintf('digit %s with font %s', $digit, $font), $flyweight->render($font));
            }
        }

        $this->assertCount(count($this->digits), $factory);
    }
}