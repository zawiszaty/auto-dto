<?php


namespace Tests\TestDoubles;


use Zawiszaty\App\DTOInterface;

class FakeClass implements DTOInterface
{
    private $id;
    private $name;
    private $createdAt;

    /**
     * FakeClass constructor.
     * @param $id
     * @param $name
     * @param $createdAt
     */
    public function __construct($id, $name, $createdAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}