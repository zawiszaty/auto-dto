<?php


namespace Tests\TestDoubles;


use App\DTO;

class FakeWithErrorDTO extends DTO
{
    public function __construct(object $object)
    {
        parent::__construct($object, FakeWithErrorClass::class);
    }
}