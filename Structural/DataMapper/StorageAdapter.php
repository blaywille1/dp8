<?php

declare(strict_types=1);

namespace DP\Structural\DataMapper;

class StorageAdapter
{
    public function __construct(private array $data)
    {
    }

    /**
     * @return array|null
     */
    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}
