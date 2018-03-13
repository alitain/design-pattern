<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/13
 * Time: 上午8:09
 */

namespace Alitain\DesignPattern\Structural\Bridge;


class HtmlFormatter implements FormatterInterface
{
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}