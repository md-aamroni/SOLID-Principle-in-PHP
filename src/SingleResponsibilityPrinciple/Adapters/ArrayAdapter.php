<?php

namespace SRP\Adapters;

trait ArrayAdapter
{
    /**
     * Get the collection as array.
     * @return array
     */
    public function toArray(): array
    {
        return $this->collection;
    }
}
