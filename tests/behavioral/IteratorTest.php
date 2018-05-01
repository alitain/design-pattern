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

        $this->assertCount(0, $list);

        $list->addStudent($s1);
        $list->addStudent($s2);
        $list->addStudent($s3);

        $this->assertCount(3, $list);

        $list->removeStudent($s2);
        $names = [];
        foreach ($list as $student) {
            $names[] = $student->getName();
        }

        $this->assertEquals(['alex', 'bob'], $names);
        $this->assertCount(2, $list);

    }
}