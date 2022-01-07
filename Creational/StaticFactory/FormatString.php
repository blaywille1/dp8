<?php

declare(strict_types=1);

namespace DP\Creational\StaticFactory;

class FormatString implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}
