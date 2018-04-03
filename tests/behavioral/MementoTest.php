<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/3
 * Time: 上午9:00
 */

use Alitain\DesignPattern\Behavioral\Memento;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testUndo()
    {
        $originator = new Memento\Originator();
        $caretaker = new Memento\Caretaker();

        $caretaker->saveMemento($originator->setState(1));
        $caretaker->saveMemento($originator->setState(2));

        $caretaker->undo($originator);
        $this->assertEquals(2, $this->getPrivateProperty($originator, 'state'));

        $caretaker->undo($originator);
        $this->assertEquals(1, $this->getPrivateProperty($originator, 'state'));
    }

    private function getPrivateProperty($obj, $property)
    {
        $r = new ReflectionObject($obj);
        $p = $r->getProperty($property);
        $p->setAccessible(true);

        return $p->getValue($obj);
    }

}