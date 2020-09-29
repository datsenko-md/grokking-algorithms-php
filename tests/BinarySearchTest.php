<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testSearch()
    {
        $obj = new BinarySearch();
        $list = [1, 3, 5, 7, 9];
        $this->assertEquals(3, $obj->search($list, 7));
        $this->assertNull($obj->search($list, 8));
        $this->assertNull($obj->search([], 4));
    }
}
