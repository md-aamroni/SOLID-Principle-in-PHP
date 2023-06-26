<?php

namespace Solid\SingleResponsibilityPrinciple\Interfaces;

interface SingleResponsibilityInterface
{
    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @return object
     */
    public function toObject(): object;

    /**
     * @return string
     */
    public function toString(): string;
}
