<?php


namespace Tests\TestDoubles;


use Zawiszaty\App\ObjectDTO;

class FakeObjectDTO extends ObjectDTO
{
    public function __construct(object $class)
    {
        parent::__construct($class,FakeClass::class);
    }
}