<?php

declare(strict_types=1);

namespace DP\Behavioral\Specification;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}
