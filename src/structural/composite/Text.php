<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/1/28
 * Time: 下午1:29
 */

namespace Alitain\DesignPattern\Structural\Composite;


class Text implements Drawable
{
    /**
     * @return mixed|string
     */
    public function draw()
    {
        return '{text}';
    }
}