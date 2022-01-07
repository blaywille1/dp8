<?php

declare(strict_types=1);

namespace DP\Behavioral\Command\Tests;

use DP\Behavioral\Command\HelloCommand;
use DP\Behavioral\Command\Invoker;
use DP\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}
