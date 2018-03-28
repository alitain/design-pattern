<?php
/**
 * Created by PhpStorm.
 * User: Ailain-T
 * Date: 2018/3/28
 * Time: 上午8:16
 */

use Alitain\DesignPattern\Behavioral\Iterator\Student;
use Alitain\DesignPattern\Behavioral\Iterator\StudentList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testStudentListCanBeIterate()
    {
        $list = new StudentList();
        $list->addStudent(new Student(3, 'alex'));
        $list->addStudent(new Student(4, 'mary'));
        $list->addStudent(new Student(9, 'bob'));

        $names = [];
        foreach ($list as $student) {
            $names[] = $student->getName();
        }

        $this->assertEquals(['alex', 'mary', 'bob'], $names);
    }

    public function testCanRemoveStudent()
    {
        $list = new StudentList();
        $s1 = new Student(3, 'alex');
        $s2 = new Student(4, 'mary');
        $s3 = new Student(9, 'bob');

        $count = count($list);
        $this->assertEquals($count, 0);

        $list->addStudent($s1);
        $list->addStudent($s2);
        $list->addStudent($s3);

        $count = count($list);
        $this->assertEquals($count, 3);

        $list->removeStudent($s2);
        $names = [];
        foreach ($list as $student) {
            $names[] = $student->getName();
        }

        $this->assertEquals(['alex', 'bob'], $names);
        $count = count($list);
        $this->assertEquals($count, 2);

    }
}