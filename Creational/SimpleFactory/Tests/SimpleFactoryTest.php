<?php

declare(strict_types=1);

namespace DP\Creational\SimpleFactory\Tests;

use DP\Creational\SimpleFactory\Bicycle;
use DP\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
