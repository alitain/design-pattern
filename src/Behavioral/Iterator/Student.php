<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/28
 * Time: 上午7:59
 */

namespace Alitain\DesignPattern\Behavioral\Iterator;


class Student
{
    /**
     * @var integer 编号
     */
    private $id;

    /**
     * @var string 姓名
     */
    private $name;

    /**
     * Student constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * id getter
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * name getter
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}