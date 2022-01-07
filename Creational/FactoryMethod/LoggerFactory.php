<?php

declare(strict_types=1);

namespace DP\Creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
