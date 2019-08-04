<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\TestDoubles\FakeClass;
use Tests\TestDoubles\FakeObjectDTO;
use Tests\TestDoubles\FakeWithErrorClass;
use Tests\TestDoubles\FakeWithErrorObjectDTO;
use Zawiszaty\App\DTOException;

class ObjectDTOTest extends TestCase
{
    function test_it()
    {
        $dateTime = new \DateTime();
        $fakeClass = new FakeClass(1, 'test', $dateTime);
        $fakeDTO = new FakeObjectDTO($fakeClass);

        $this->assertSame(1, $fakeDTO->id);
        $this->assertSame('test', $fakeDTO->name);
        $this->assertSame($dateTime, $fakeDTO->createdAt);
    }

    function test_error()
    {
        $this->expectException(DTOException::class);
        $dateTime = new \DateTime();
        $fakeClass = new FakeWithErrorClass(1, 'test', $dateTime);
        new FakeWithErrorObjectDTO($fakeClass);
    }
}
