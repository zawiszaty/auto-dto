<?php

namespace Tests;

use App\DTOException;
use PHPUnit\Framework\TestCase;
use Tests\TestDoubles\FakeClass;
use Tests\TestDoubles\FakeDTO;
use Tests\TestDoubles\FakeWithErrorClass;
use Tests\TestDoubles\FakeWithErrorDTO;

class Test extends TestCase
{
    function test_it()
    {
        $dateTime = new \DateTime();
        $fakeClass = new FakeClass(1, 'test', $dateTime);
        $fakeDTO = new FakeDTO($fakeClass);

        $this->assertSame(1, $fakeDTO->id);
        $this->assertSame('test', $fakeDTO->name);
        $this->assertSame($dateTime, $fakeDTO->createdAt);
    }

    function test_error()
    {
        $this->expectException(DTOException::class);
        $dateTime = new \DateTime();
        $fakeClass = new FakeWithErrorClass(1, 'test', $dateTime);
        new FakeWithErrorDTO($fakeClass);
    }
}
