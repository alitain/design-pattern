<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/3
 * Time: 下午8:17
 */

namespace Alitain\DesignPattern\Creational\FactoryMethod;


class Editor extends AbstractEditor
{
    const TYPE_TEXT = 'text';
    const TYPE_CSV = 'csv';

    /**
     * 打开文档
     *
     * @param string $type
     * @return Csv|Text|mixed
     * @throws \InvalidArgumentException
     */
    public function createDocument($type)
    {

        switch ($type) {
            case self::TYPE_CSV:
                return new Csv();
            case self::TYPE_TEXT:
                return new Text();
            default:
                throw new \InvalidArgumentException("$type is unsupported document type");
        }
    }
}