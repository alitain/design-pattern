<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/4/9
 * Time: 上午8:47
 */

namespace Alitain\DesignPattern\Behavioral\TemplateMethod;


class AbstractClass
{
    public function primitiveOperationA(): string
    {
        return 'Abstract A';
    }

    public function primitiveOperationB(): string
    {
        return 'Abstract B';
    }

    final public function templateMethod(): string
    {
        /* .... */
        $operationA = $this->primitiveOperationA();
        /* .... */
        $operationB = $this->primitiveOperationB();

        return $operationA. ' And '. $operationB;
    }
}