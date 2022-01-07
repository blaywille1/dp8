<?php

declare(strict_types=1);

namespace DP\Behavioral\State;

interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}
