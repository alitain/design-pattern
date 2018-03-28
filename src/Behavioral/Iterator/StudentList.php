<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/28
 * Time: 上午8:00
 */

namespace Alitain\DesignPattern\Behavioral\Iterator;


class StudentList implements \Iterator, \Countable
{

    /**
     * @var Student[]
     */
    private $list;

    /**
     * @var integer
     */
    private $index;

    /**
     * 添加学生
     * @param Student $student
     */
    public function addStudent(Student $student)
    {
        $this->list[] = $student;
    }

    /**
     * 移除学生
     * @param Student $student
     */
    public function removeStudent(Student $student)
    {
        foreach ($this->list as $k => $s) {
            if ($student->getId() === $s->getId()) {
                unset($this->list[$k]);
            }
        }
        if (isset($k) && $k < $this->key()) {
            $this->index --;
        }
        $this->list = array_values($this->list);
    }

    public function current()
    {
        return $this->list[$this->index];
    }

    public function next()
    {
        $this->index ++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->list[$this->index]);
    }

    public function rewind()
    {
       $this->index = 0;
    }

    public function count()
    {
        return count($this->list);
    }
}