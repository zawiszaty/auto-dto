<?php


namespace Zawiszaty\App;


class DTOException extends \RuntimeException
{
    public static function fromMssingProperty(string $property)
    {
        return new self("Property: $property doesnt exist or dont have public access or dont have public getter");
    }

    public static function fromMssingPropertyinArray(string $property)
    {
        return new self("Property: $property is missing in array");
    }
}