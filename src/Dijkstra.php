<?php

namespace App;

use PhpParser\Node\Expr\FuncCall;

class Dijkstra
{
    public function search($graph, $costs, $parents)
    {
        $processed = [];
        $node = $this->findLowestCostNode($costs, $processed);

        while ($node !== null) {
            $cost = $costs[$node];
            $neighbors = $graph[$node];
            foreach ($neighbors as $neighbor => $neighborCost) {
                $newCost = $cost + $neighborCost;
                if ($newCost < $costs[$neighbor]) {
                    $costs[$neighbor] = $newCost;
                    $parents[$neighbor] = $node;
                }
            }
            $processed[] = $node;
            $node = $this->findLowestCostNode($costs, $processed);
        }
        
        return $costs['end'];
    }

    private function findLowestCostNode($costs, $processed)
    {
        $lowestCost = PHP_INT_MAX;
        $lowestCostNode = null;

        foreach ($costs as $node => $cost) {
            if ($lowestCost > $cost && !in_array($node, $processed)) {
                $lowestCost = $cost;
                $lowestCostNode = $node;
            }
        }

        return $lowestCostNode;
    }
}
