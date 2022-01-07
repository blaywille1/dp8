<?php

declare(strict_types=1);

namespace DP\Structural\DependencyInjection\Tests;

use DP\Structural\DependencyInjection\DatabaseConfiguration;
use DP\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'abcdef', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('abcdef:1234@localhost:3306', $connection->getDsn());
    }
}
