<?php
require 'strutils.php';
use PHPUnit\Framework\TestCase;

class Mytest extends TestCase{
    // public function testmyVarIsStr()
    // {
    //     $obj = new StrUtils('simon');
    //     $this->assertEquals('simon', $obj->getMystr());
    // } 
    //test si le paramettre est egale a la demande

    public function testVarExist()
    {
        $this->assertClassHasAttribute('_str',strUtils::class);
    }

    public function testisbold(){
        $isItBold = new strUtils('this is a test');
        $this->assertEquals('<strong>this is a test</strong>', $isItBold->bold());

    }


}
?>