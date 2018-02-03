<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/2/3
 * Time: 下午7:32
 */

namespace Alitain\DesignPattern\Creational\FactoryMethod;


interface DocumentInterface
{
    /**
     * 打开文件
     * @return mixed
     */
    public function open();

    /**
     * 关闭文件
     * @return mixed
     */
    public function close();

    /**
     * 加载文件
     * @param string $path 文件地址
     * @return mixed
     */
    public function load($path);
}