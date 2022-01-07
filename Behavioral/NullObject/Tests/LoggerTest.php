<?php

declare(strict_types=1);

namespace DP\Behavioral\NullObject\Tests;

use DP\Behavioral\NullObject\NullLogger;
use DP\Behavioral\NullObject\PrintLogger;
use DP\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DP\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
