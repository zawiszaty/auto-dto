<?php


namespace Zawiszaty\App;


class DTOException extends \RuntimeException
{
    public static function fromMssingProperty(string $property)
    {
        return new self("Property: $property doesnt exist or dont have public access or dont have public getter");
    }

    public static function fromMssingPropertyinArray()
    {
        return new self("Is Not a valid params array");
    }
}