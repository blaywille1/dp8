<?php

declare(strict_types=1);

namespace DP\Behavioral\Strategy;

class IdComparator implements Comparator
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
