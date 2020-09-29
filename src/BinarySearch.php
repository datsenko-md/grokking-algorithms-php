<?php

namespace App;

class BinarySearch
{
    public function search($list, $num)
    {
        $low = 0;
        $high = count($list) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            if ($list[$mid] === $num) {
                return $mid;
            } elseif ($list[$mid] < $num) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return null;
    }
}
