<?php

namespace Tests\TestDoubles;

use Zawiszaty\App\ObjectDTO;

class FakeWithErrorObjectDTO extends ObjectDTO
{
    public function __construct(FakeWithErrorClass $object, array $propertyName)
    {
        parent::__construct($object, $propertyName);
    }
}