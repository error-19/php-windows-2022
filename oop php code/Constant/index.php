<?php
class student
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function output(){
echo 'My name is:' -$this->name;
    }
}
$std=new student(name:'Murad');
   /* const Roll=45;
    public function output()
    {
        echo self::Roll;
    }
}*/
//echo student::Roll;