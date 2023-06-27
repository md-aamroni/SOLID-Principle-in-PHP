<?php

namespace SRP\Interfaces;

interface SingleResponsibilityInterface
{
    /**
     * Get the collection as array.
     * @return array
     */
    public function toArray(): array;

    /**
     * Get the collection as object.
     * @return object
     */
    public function toObject(): object;

    /**
     * Get the collection as string.
     * @return string
     */
    public function toString(): string;
}
