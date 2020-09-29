<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function testSort()
    {
        $obj = new SelectionSort();
        $list = [5, 3, 7, 8, 1, 2, 9, 4, 6, 10];
        $expected = range(1, 10);
        $this->assertEquals($expected, $obj->sort($list));
    }
}
