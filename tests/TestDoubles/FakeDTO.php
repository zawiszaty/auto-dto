<?php


namespace Tests\TestDoubles;

use App\DTO;


class FakeDTO extends DTO
{
    public function __construct(object $class)
    {
        parent::__construct($class,FakeClass::class);
    }
}