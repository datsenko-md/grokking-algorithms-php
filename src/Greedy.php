<?php

namespace App;

class Greedy
{
    public function search($stations, \Ds\Set $statesNeeded)
    {
        $finalStations = new \Ds\Set();
        
        while (!$statesNeeded->isEmpty()) {
            $bestStation = null;
            $statesCovered = new \Ds\Set();

            foreach ($stations as $name => $states) {
                $covered = $statesNeeded->intersect($states);
                if ($covered->count() > $statesCovered->count()) {
                    $bestStation = $name;
                    $statesCovered = $covered;
                }
            }

            $finalStations->add($bestStation);
            $statesNeeded = $statesNeeded->diff($statesCovered);
        }

        return $finalStations;
    }
}
