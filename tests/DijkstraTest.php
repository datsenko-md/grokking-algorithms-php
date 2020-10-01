<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Dijkstra;

class DijkstraTest extends TestCase
{
    public function testSearch()
    {
        $graph = [
            'start' => [
                'a' => 6,
                'b' => 2
            ],
            'a' => [
                'end' => 1
            ],
            'b' => [
                'a' => 3,
                'end' => 5
            ],
            'end' => []
        ];

        $costs = [
            'a' => 6,
            'b' => 2,
            'end' => PHP_INT_MAX
        ];

        $parents = [
            'a' => 'start',
            'b' => 'start',
            'end' => null
        ];

        $obj = new Dijkstra();
        $actual = $obj->search($graph, $costs, $parents);
        $expected = 6;
        $this->assertEquals($expected, $actual);
    }
}
