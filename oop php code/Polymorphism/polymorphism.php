<?php
interface test{
    public function abc();
    public function xyz($x,$y);
}
interface test1{
    public function biri();
}
interface test2{
    public function sigaret();
}
class student implements test,test1,test2{
    public function abc(){

    }
    public function xyz($x,$y){

    }
    public function biri(){

    }
    public function sigaret(){

    }
}
/*interface test1 extends test{
    public function efg($x);
}
class student implements test1{
    public function abc(){

    }
    public function xyz($x,$y){

    }
    public function efg($x){

    }
}*/