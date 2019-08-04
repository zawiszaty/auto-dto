<?php


namespace Zawiszaty\App;


class ArrayDTO
{
    /** @var string */
    private $class;

    public function __construct(array $params, string $class)
    {
        $this->class = $class;
        $propertiesNames = $this->getClassPropertiesName();

        if (array_keys($params) !== $propertiesNames) {
            throw DTOException::fromMssingPropertyinArray();
        }

        $this->mapProperty($params, $propertiesNames);
    }

    private function getClassPropertiesName(): array
    {
        $class = new \ReflectionClass($this->class);
        $properties = $class->getProperties();
        $propertiesName = [];

        array_map(function (\ReflectionProperty $property) use (&$propertiesName) {
            $propertiesName[] = $property->getName();
        }, $properties);

        return $propertiesName;
    }

    private function mapProperty(array $params, array $propertiesNames): void
    {
        foreach ($propertiesNames as $propertiesName) {
            $this->{$propertiesName} = $params[$propertiesName];
        }
    }
}