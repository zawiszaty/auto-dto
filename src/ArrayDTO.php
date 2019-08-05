<?php


namespace Zawiszaty\App;


class ArrayDTO
{
    public function __construct(array $params, array $propertyName)
    {
        $this->mapProperty($params, $propertyName);
    }

    private function mapProperty(array $params, array $propertiesNames): void
    {
        foreach ($propertiesNames as $propertiesName)
        {
            try
            {
                $this->{$propertiesName} = $params[$propertiesName];
            }
            catch (\Exception $exception)
            {
                throw  DTOException::fromMssingPropertyinArray($propertiesName);
            }
        }
    }
}