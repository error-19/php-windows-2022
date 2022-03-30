<?php
class User extends Admin{
    protected function js(){
        echo 'js';
    }
   private function laravel(){
        echo 'laravel';
    }
    public function test(){
        //echo 'test';
        $this->sigaret();
        //$this->ganja();
        $this->biri();
    }
}
?>
