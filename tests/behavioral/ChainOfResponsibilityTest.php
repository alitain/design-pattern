<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/10
 * Time: 下午4:25
 */

use Alitain\DesignPattern\Behavioral\ChainOfResponsibility\AbstractHandler;
use Alitain\DesignPattern\Behavioral\ChainOfResponsibility\PostRequestOnlyHandler;
use Alitain\DesignPattern\Behavioral\ChainOfResponsibility\RequestHandler;
use Alitain\DesignPattern\Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    /**
     * @var AbstractHandler $handler
     */
    private $handler;

    public function setUp()
    {
        $this->handler = new PostRequestOnlyHandler();
        $successor = new RequestHandler();

        $this->handler->setSuccessor($successor);
    }

    public function testHandlePostRequest()
    {
        $postRequest = new Request('/foo/bar', 'post', ['foo' => 'bar']);
        $ret = $this->handler->handle($postRequest);

        $this->assertEquals('request handled', $ret);
    }

    public function testHandleGetRequest()
    {
        $getRequest = new Request('/foo/bar', 'get', ['foo' => 'bar']);
        $this->expectExceptionMessage('unsupported request method');
        $this->handler->handle($getRequest);
    }
}