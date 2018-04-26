<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/26
 * Time: 上午7:56
 */

use Alitain\DesignPattern\Behavioral\Mediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{

    public function testCooperate()
    {
        $colleague = new Mediator\ConcreteColleagueA();

        new Mediator\ConcreteMediator($colleague, new Mediator\ConcreteColleagueB());

        $this->assertEquals($colleague->doJob(), 'job is done!');
    }

}