<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/3
 * Time: 下午8:37
 */
use Alitain\DesignPattern\Creational\FactoryMethod\Editor;
use Alitain\DesignPattern\Creational\FactoryMethod\Text;
use Alitain\DesignPattern\Creational\FactoryMethod\Csv;
use \PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @var Editor $editor
     */
    protected $editor;

    protected function setUp()
    {
        $this->editor = new Editor();
    }

    public function testNewText()
    {
        $doc = $this->editor->newDocument('text');
        $this->assertInstanceOf(Text::class, $doc);
    }

    public function testOpenText()
    {
        $doc = $this->editor->openDocument('a.text');
        $this->assertInstanceOf(Text::class, $doc);
    }

    public function testNewCsv()
    {
        $doc = $this->editor->newDocument('csv');
        $this->assertInstanceOf(Csv::class, $doc);
    }

    public function testOpenCsv()
    {
        $doc = $this->editor->openDocument('a.csv');
        $this->assertInstanceOf(Csv::class, $doc);
    }

    public function testNewUnsupportedDocument()
    {
        $this->expectExceptionMessage('json is unsupported document type');
        $this->editor->newDocument('json');
    }

    public function testOpenUnsupportedDocument()
    {
        $this->expectExceptionMessage('json is unsupported document type');
        $this->editor->openDocument('a.json');
    }

}