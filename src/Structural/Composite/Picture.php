<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/1/28
 * Time: 下午1:29
 */

namespace Alitain\DesignPattern\Structural\Composite;


class Picture implements Drawable
{
    /**
     * @var Drawable[]
     */
    protected $elements;

    /**
     * @return mixed|string
     */
    public function draw()
    {
        $output = '{picture';

        foreach ($this->elements as $e) {
            $output .= $e->draw();
        }

        $output .='}';

        return $output;
    }

    /**
     * @param Drawable $e
     */
    public function addElement(Drawable $e)
    {
        $this->elements[] = $e;
    }
}