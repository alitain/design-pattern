<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/10
 * Time: 下午4:10
 */

namespace Alitain\DesignPattern\Behavioral\ChainOfResponsibility;


class PostRequestOnlyHandler extends AbstractHandler
{
    /**
     * @param Request $request
     * @return void
     * @throws \Exception
     */
    public function process(Request $request)
    {
       if (strtoupper($request->getMethod()) !== 'POST') {
           throw new \Exception('unsupported request method');
       }
    }
}