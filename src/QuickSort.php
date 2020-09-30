<?php

namespace App;

use Illuminate\Support\Collection;

class QuickSort
{
    public function sort(array $arr)
    {
        if (count($arr) < 2) {
            return $arr;
        }

        $midIndex = floor(count($arr) / 2);
        $pivot = $arr[$midIndex];
        unset($arr[$midIndex]);
        $less = array_values(array_filter($arr, fn($item) => $item < $pivot));
        $equalOrGreater = array_values(array_filter($arr, fn($item) => $item >= $pivot));

        return array_merge($this->sort($less), [$pivot], $this->sort($equalOrGreater));
    }
}
