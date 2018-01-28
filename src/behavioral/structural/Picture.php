<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/1/28
 * Time: 下午1:29
 */

namespace Alitain\DesignPattern\Behavioral\Structural;


class Picture implements DrawableInterface
{
    /**
     * @var DrawableInterface[]
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
     * @param DrawableInterface $e
     */
    public function addElement(DrawableInterface $e)
    {
        $this->elements[] = $e;
    }
}