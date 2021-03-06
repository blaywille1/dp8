<?php

declare(strict_types=1);

namespace DP\Behavioral\Mediator;

abstract class Colleague
{
    protected Mediator $mediator;

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
