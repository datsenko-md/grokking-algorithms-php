<?php

namespace App;

class SelectionSort
{
    public function sort($list)
    {
        $newList = [];

        for ($i = 0, $len = count($list); $i < $len; $i++) {
            $smallest = $this->findSmallest($list);
            $newList[] = $list[$smallest];
            unset($list[$smallest]);
            $list = array_values($list);
        }

        return $newList;
    }

    private function findSmallest($list)
    {
        $smallest = $list[0];
        $smallestIndex = 0;

        for ($i = 0, $len = count($list); $i < $len; $i++) {
            if ($list[$i] < $smallest) {
                $smallest = $list[$i];
                $smallestIndex = $i;
            }
        }

        return $smallestIndex;
    }
}
