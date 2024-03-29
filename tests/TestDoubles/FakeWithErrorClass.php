<?php


namespace Tests\TestDoubles;


use Zawiszaty\App\DTOInterface;

class FakeWithErrorClass implements DTOInterface
{
    private $id;
    private $name;
    private $createdAt;

    /**
     * FakeClass constructor.
     *
     * @param $id
     * @param $name
     * @param $createdAt
     */
    public function __construct($id, $name, $createdAt)
    {
        $this->id        = $id;
        $this->name      = $name;
        $this->createdAt = $createdAt;
    }
}