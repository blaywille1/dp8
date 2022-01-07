<?php

declare(strict_types=1);

namespace DP\Creational\AbstractFactory\Tests;

use DP\Creational\AbstractFactory\CsvWriter;
use DP\Creational\AbstractFactory\JsonWriter;
use DP\Creational\AbstractFactory\UnixWriterFactory;
use DP\Creational\AbstractFactory\WinWriterFactory;
use DP\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
