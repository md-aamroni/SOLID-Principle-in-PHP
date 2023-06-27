<?php

namespace SRP\Interfaces;

use SRP\Adapters\ArrayAdapter;
use SRP\Adapters\ObjectAdapter;
use SRP\Adapters\StringAdapter;

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
