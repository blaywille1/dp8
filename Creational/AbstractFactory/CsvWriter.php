<?php

namespace DP\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}
