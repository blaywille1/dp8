<?php

declare(strict_types=1);

namespace DP\Creational\Builder\Tests;

use DP\Creational\Builder\Parts\Car;
use DP\Creational\Builder\Parts\Truck;
use DP\Creational\Builder\TruckBuilder;
use DP\Creational\Builder\CarBuilder;
use DP\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
