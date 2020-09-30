<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\QuickSort;
use Ds\Queue;

class QuickSortTest extends TestCase
{
    public function testSort()
    {
        $obj = new QuickSort();
        $arr = [3, 2, 4, 1, 5];
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $obj->sort($arr));
    }
}
