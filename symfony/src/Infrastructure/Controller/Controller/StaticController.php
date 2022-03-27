<?php

namespace App\Infrastructure\Controller\Controller;

class StaticController
{


    public function index()
    {
        $this->testStatic();
        $this->testStatic();
        $this->testStatic();
        $this->testStatic();
        dd('2');
    }

    public function testStatic()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
}