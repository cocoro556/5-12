<?php

use PharIo\Version\NoPreReleaseSuffixException;
class Person
{
    protected $name;
    private $age;

    public function __construct($newName, $newAge)
    {
        $this->name = $newName;
        $this->age = $newAge;
    }

public function getName(){
    return $this->name;
}

    public function introduce()
    {
        return "初めまして{$this->name}といいます。年齢は{$this->age}歳です。よろしくお願いします\n";
    }
}

class Teacher extends Person
{
    private $subject;

    public function __construct($name,$subjectNew)
    {
        parent::__construct($name,"年齢未設定");
        $this->subject = $subjectNew;
    }

    public function introduce()
    {
       return "私は{$this->name}です、{$this->subject}を教えています\n" ;
    }
}

class Student extends Person
{
    private $studentId;

    public function __construct(Person $personNname,$studentId)
    {
        parent::__construct($personNname->getName(),"年齢は未設定");
        $this->studentId = $studentId;
    }

    public function introduce()
    {
        return "私は{$this->name}です、学生IDは{$this->studentId}です";
    }
}


// Personオブジェクトの作成
$student1 = new Person("横浜流星", 28);

// subjectオブジェクトの作成
$subject1 = new Teacher("夏目漱石","国語");

// studentオブジェクトの作成
$studentId1 = new Student($student1, 22);


// 表示
// echo $student1->introduce();
// echo $subject1->introduce();
// echo $studentId1->introduce();