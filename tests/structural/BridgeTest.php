<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/13
 * Time: 上午8:18
 */

use Alitain\DesignPattern\Structural\Bridge\AbstractService;
use Alitain\DesignPattern\Structural\Bridge\HelloWordService;
use Alitain\DesignPattern\Structural\Bridge\HtmlFormatter;
use Alitain\DesignPattern\Structural\Bridge\TextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    /**
     * @var AbstractService $service
     */
    protected $service;

    public function setUp()
    {
        $this->service = new HelloWordService();
    }

    public function testHtmlPrinter()
    {
        $this->service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>hello world</p>', $this->service->get());
    }

    public function testTextPrinter()
    {
        $this->service->setImplementation(new TextFormatter());
        $this->assertEquals('hello world', $this->service->get());
    }
}