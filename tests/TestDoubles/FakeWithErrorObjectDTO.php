<?php

namespace Tests\TestDoubles;

use Zawiszaty\App\ObjectDTO;

class FakeWithErrorObjectDTO extends ObjectDTO
{
    public function __construct(object $object)
    {
        parent::__construct($object, FakeWithErrorClass::class);
    }
}