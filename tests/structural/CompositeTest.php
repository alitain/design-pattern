<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/1/28
 * Time: 下午1:36
 */
namespace Alitain\DesignPattern\Tests\Behavioral\Composite;

use \PHPUnit\Framework\TestCase;
use Alitain\DesignPattern\Behavioral\Structural\Line;
use Alitain\DesignPattern\Behavioral\Structural\Text;
use Alitain\DesignPattern\Behavioral\Structural\Picture;

class CompositeTest extends TestCase
{
    public function testDraw()
    {
        $pictureA = new Picture();
        $line = new Line();
        $pictureA->addElement($line);

        $pictureB = new Picture();
        $text = new Text();

        $pictureB->addElement($pictureA);
        $pictureB->addElement($text);

        $this->assertEquals('{picture{picture{line}}{text}}', $pictureB->draw());
    }

}