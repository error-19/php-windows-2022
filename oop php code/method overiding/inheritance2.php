<?php
class Student
{
   protected $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function output(){
echo 'My name is :' .$this->name;
    }
}
//Method overridding technique oop
class Mark extends Student{
    public $roll;
    public function output(){
        echo 'My name is :' .$this->name .'Roll'.$this->roll;
    }
}
$std=new Student( 'Shamim Sorkar');
$std->output();
echo '<br>';
$mark=new Mark(name: 'Motaleb');
$mark->roll=18019;
$mark->output();