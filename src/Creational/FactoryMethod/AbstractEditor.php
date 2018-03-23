<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/3
 * Time: 下午7:38
 */

namespace Alitain\DesignPattern\Creational\FactoryMethod;


abstract class AbstractEditor
{
    /**
     * @var DocumentInterface[]
     */
    protected $docs = [];

    /**
     * Factory Method
     *
     * @param string $type 文件类型
     * @return mixed
     */
    abstract public function createDocument($type);

    /**
     *创建一个文件
     * @param string $type 文件类型
     * @return DocumentInterface
     */
    public function newDocument($type)
    {
        /** @var DocumentInterface $doc */
        $doc = $this->createDocument($type);
        $this->docs[] = $doc;
        return $doc->open();
    }

    /**
     * 打开一个文件
     *
     * @param string $path 文件地址
     * @return DocumentInterface
     */
    public function openDocument($path)
    {
        /** @var DocumentInterface $doc */
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $doc = $this->createDocument($type);
        $this->docs[] = $doc;
        $doc->load($path);
        return $doc->open();
    }

    public function __destruct()
    {
        foreach ($this->docs as $doc) {
            /** @var DocumentInterface $doc */
            $doc->close();
        }
        $this->docs = [];
    }

}