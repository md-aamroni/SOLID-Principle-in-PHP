<?php

namespace Solid\SingleResponsibilityPrinciple\Interfaces;

use Solid\SingleResponsibilityPrinciple\Adapters\ArrayAdapter;
use Solid\SingleResponsibilityPrinciple\Adapters\ObjectAdapter;
use Solid\SingleResponsibilityPrinciple\Adapters\StringAdapter;

abstract class ConcreteSingleResponsibility implements SingleResponsibilityInterface
{
    use ArrayAdapter;
    use ObjectAdapter;
    use StringAdapter;

    /**
     * Define the collection.
     * @var array|object
     */
    protected array|object $collection = [];
}
