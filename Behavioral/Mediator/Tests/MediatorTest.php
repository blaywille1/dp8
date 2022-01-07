<?php

declare(strict_types=1);

namespace DP\Tests\Mediator\Tests;

use DP\Behavioral\Mediator\Ui;
use DP\Behavioral\Mediator\UserRepository;
use DP\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}
