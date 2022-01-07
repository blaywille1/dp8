<?php

declare(strict_types=1);

namespace DP\Creational\StaticFactory\Tests;

use InvalidArgumentException;
use DP\Creational\StaticFactory\FormatNumber;
use DP\Creational\StaticFactory\FormatString;
use DP\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}
