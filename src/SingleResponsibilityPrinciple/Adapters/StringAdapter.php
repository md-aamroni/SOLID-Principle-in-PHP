<?php

namespace Solid\SingleResponsibilityPrinciple\Adapters;

trait StringAdapter
{
    /**
     * Get the collection as string.
     * @return string
     */
    public function toString(): string
    {
        return json_encode($this->collection);
    }
}
