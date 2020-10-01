<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Other;

class OtherTest extends TestCase
{
    public function testCount()
    {
        $obj = new Other();

        $arr1 = [];
        $this->assertEquals(0, $obj->count($arr1));
        
        $arr2 = [1, 2, 3, 4, 5];
        $this->assertEquals(5, $obj->count($arr2));
    }

    public function testSum()
    {
        $obj = new Other();

        $arr1 = [];
        $this->assertEquals(0, $obj->sum($arr1));

        $arr2 = [5];
        $this->assertEquals(5, $obj->sum($arr2));
        
        $arr3 = [1, 2, 3, 4, 5];
        $this->assertEquals(15, $obj->sum($arr3));
    }

    public function testMax()
    {
        $obj = new Other();
        
        $arr1 = [5];
        $this->assertEquals(5, $obj->max($arr1));
        
        $arr2 = [1, 2, 3, 7, 5];
        $this->assertEquals(7, $obj->max($arr2));

        $arr3 = [];
        $this->assertNull($obj->max($arr3));
    }
}
