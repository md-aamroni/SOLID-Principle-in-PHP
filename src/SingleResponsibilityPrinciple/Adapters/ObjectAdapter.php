<?php

namespace SRP\Adapters;

trait ObjectAdapter
{
    /**
     * Get the collection as object.
     * @return object
     */
    public function toObject(): object
    {
        return json_decode(json_encode($this->collection));
    }
}
