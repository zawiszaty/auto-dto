<?php


namespace Zawiszaty\App;


class ObjectDTO
{
    /** @var string */
    private $class;

    public function __construct(object $object, string $class)
    {
        $this->class = $class;
        $propertiesNames = $this->getClassPropertiesName();

        $this->mapProperty($object, $propertiesNames);
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

    private function mapProperty(object $params, array $propertiesNames): void
    {
        foreach ($propertiesNames as $propertiesName) {
            try {
                $this->{$propertiesName} = $params->{'get' . ucfirst($propertiesName)}();
            } catch (\Error $error) {
                try {
                    $this->{$propertiesName} = $params->{$propertiesName};
                } catch (\Error $error) {
                    throw DTOException::fromMssingProperty($propertiesName);
                }
            }

        }
    }
}