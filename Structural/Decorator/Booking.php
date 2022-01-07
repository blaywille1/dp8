<?php

declare(strict_types=1);

namespace DP\Structural\Decorator;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
