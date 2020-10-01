<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\BreadthFirstSearch;

class BreadthFirstSearchTest extends TestCase
{
    public function testSearch()
    {
        $graph = [
            'you' => [
                'profession' => 'developer',
                'friends' => ['alice', 'bob', 'claire']
            ],
            'bob' => [
                'profession' => 'doctor',
                'friends' => ['anuj', 'peggy']
            ],
            'alice' => [
                'profession' => 'writer',
                'friends' => ['peggy']
            ],
            'claire' => [
                'profession' => 'monk',
                'friends' => ['tom', 'jonny']
            ],
            'anuj' => [
                'profession' => 'killer',
                'friends' => []
            ],
            'peggy' => [
                'profession' => 'dancer',
                'friends' => []
            ],
            'tom' => [
                'profession' => 'mango seller',
                'friends' => []
            ],
            'jonny' => [
                'profession' => 'singer',
                'friends' => []
            ]
        ];

        $obj = new BreadthFirstSearch();

        $expected = 'tom';
        $actual = $obj->search($graph, 'you', 'mango seller');
        $this->assertEquals($expected, $actual);
        
        $expected = null;
        $actual = $obj->search($graph, 'you', 'thief');
        $this->assertEquals($expected, $actual);

        $graph['claire']['profession'] = 'mango seller';
        $expected = 'claire';
        $actual = $obj->search($graph, 'you', 'mango seller');
        $this->assertEquals($expected, $actual);
    }
}
