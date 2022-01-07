<?php

declare(strict_types=1);

namespace DP\Behavioral\Interpreter;

abstract class AbstractExp
{
    abstract public function interpret(Context $context): bool;
}
