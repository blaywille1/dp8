<?php

declare(strict_types=1);

namespace DP\Creational\FactoryMethod\Tests;

use DP\Creational\FactoryMethod\FileLogger;
use DP\Creational\FactoryMethod\FileLoggerFactory;
use DP\Creational\FactoryMethod\StdoutLogger;
use DP\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
