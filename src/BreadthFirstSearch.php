<?php

namespace App;

class BreadthFirstSearch
{
    public function search($graph, $name, $profession)
    {
        $queue = new \Ds\Queue();
        $queue->push(...$graph[$name]['friends']);
        $searched = [];
        
        while (!$queue->isEmpty()) {
            $friend = $queue->pop();
            if (in_array($friend, $searched)) {
                continue;
            }
            if ($graph[$friend]['profession'] === $profession) {
                return $friend;
            }
            $searched[] = $friend;
            $queue->push(...$graph[$friend]['friends']);
        }

        return null;
    }
}
