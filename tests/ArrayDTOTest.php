<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\TestDoubles\FakeArrayDTO;
use Zawiszaty\App\DTOException;

class ArrayDTOTest extends TestCase
{
    function test_it()
    {
        $dateTime = new \DateTime();
        $fakeDTO = new FakeArrayDTO([
            'id' => 1,
            'name' => 'test',
            'createdAt' => $dateTime
        ], ['id', 'name', 'createdAt']);
        $this->assertSame(1, $fakeDTO->id);
        $this->assertSame('test', $fakeDTO->name);
        $this->assertSame($dateTime, $fakeDTO->createdAt);
    }

    function test_error()
    {
        $this->expectException(DTOException::class);
        new FakeArrayDTO([], ['id']);
    }
}
