<?php


namespace Tests\TestDoubles;

use Zawiszaty\App\ArrayDTO;

class FakeArrayDTO extends ArrayDTO
{
    public function __construct(array $params)
    {
        parent::__construct($params, FakeClass::class);
    }
}