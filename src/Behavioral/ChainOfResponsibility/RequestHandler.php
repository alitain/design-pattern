<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/10
 * Time: 下午4:21
 */

namespace Alitain\DesignPattern\Behavioral\ChainOfResponsibility;


class RequestHandler extends AbstractHandler
{
    /**
     * @param Request $request
     * @return string
     */
    public function process(Request $request)
    {
        return 'request handled';
    }
}