<?php

namespace App;

class Other
{
    public function count(array $arr)
    {
        if (empty($arr)) {
            return 0;
        }
        return 1 + $this->count(array_slice($arr, 0, count($arr) - 1));
    }

    public function sum(array $arr)
    {
        if (empty($arr)) {
            return 0;
        }

        return $arr[0] + $this->sum(array_slice($arr, 1));
    }

    public function max(array $arr)
    {
        if (empty($arr)) {
            return null;
        }
        
        $max = $arr[0];
        return $this->maxIter(array_slice($arr, 1), $max);
    }

    private function maxIter($arr, $max)
    {
        if (empty($arr)) {
            return $max;
        }

        if ($max < $arr[0]) {
            $max = $arr[0];
        }

        return $this->maxIter(array_slice($arr, 1), $max);
    }
}
