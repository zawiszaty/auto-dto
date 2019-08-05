<?php


namespace Tests\TestDoubles;


use Zawiszaty\App\ObjectDTO;

class FakeObjectDTO extends ObjectDTO
{
    public function __construct(FakeClass $object, array $propertyName)
    {
        parent::__construct($object, $propertyName);
    }
}